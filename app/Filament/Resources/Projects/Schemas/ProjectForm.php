<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(1)
                    ->schema([
                        Section::make('Identidad del Proyecto')
                            ->description('Información básica y ruta de acceso pública.')
                            ->schema([
                                Grid::make(2)->schema([
                                    TextInput::make('title')
                                        ->label('Título del Proyecto')
                                        ->placeholder('Ej: Hestia Dashboard')
                                        ->required(),

                                    TextInput::make('slug')
                                        ->label('Slug')
                                        ->placeholder('Se generará automáticamente')
                                        ->disabled()
                                        ->dehydrated(false)
                                        ->visible(fn ($record) => $record !== null)
                                        ->copyable()
                                        ->formatStateUsing(fn ($state) => url('/proyecto').'/'.$state),
                                ]),

                                TextInput::make('subtitle')
                                    ->label('Subtítulo o Lema')
                                    ->required()
                                    ->columnSpanFull(),

                                TextInput::make('url')
                                    ->label('Enlace Externo (URL)')
                                    ->url()
                                    ->columnSpanFull(),
                            ])
                            ->icon('heroicon-o-identification')
                            ->collapsible(),

                        Section::make('Multimedia y Visuales')
                            ->description('Gestiona las imágenes que se mostrarán en el portafolio.')
                            ->schema([
                                FileUpload::make('thumbnail')
                                    ->label('Miniatura Principal (Listado)')
                                    ->image()
                                    ->disk('public')
                                    ->visibility('public')
                                    ->previewable()
                                    ->imageEditor()
                                    ->directory('projects/thumbnails')
                                    ->required()
                                    ->columnSpanFull(),

                                Grid::make(2)->schema([
                                    FileUpload::make('mockup_one')
                                        ->label('Mockup Superior (Detalle)')
                                        ->image()
                                        ->disk('public')
                                        ->visibility('public')
                                        ->previewable()
                                        ->directory('projects/mockups'),

                                    FileUpload::make('mockup_two')
                                        ->label('Mockup Inferior (Detalle)')
                                        ->image()
                                        ->disk('public')
                                        ->visibility('public')
                                        ->previewable()
                                        ->directory('projects/mockups'),
                                ]),
                            ])
                            ->icon('heroicon-o-photo')
                            ->collapsible(),
                    ]),

                Grid::make(1)
                    ->schema([
                        Section::make('Contenido y Narrativa')
                            ->description('Explica la historia detrás del proyecto y el valor aportado.')
                            ->schema([
                                RichEditor::make('company_description')
                                    ->label('¿Quiénes Son?')
                                    ->required()
                                    ->columnSpanFull(),

                                RichEditor::make('project_description')
                                    ->label('¿Cómo les ayudamos?')
                                    ->required()
                                    ->columnSpanFull(),
                            ])
                            ->icon('heroicon-o-document-text')
                            ->collapsible(),

                        Section::make('Ajustes de Publicación')
                            ->description('Controla la visibilidad del proyecto en el sitio.')
                            ->schema([
                                Toggle::make('is_published')
                                    ->label('Publicado y Visible')
                                    ->helperText('Activa esta opción para que el proyecto aparezca en el portafolio público.')
                                    ->default(true)
                                    ->required(),
                            ])
                            ->icon('heroicon-o-cog-6-tooth')
                            ->compact(),
                    ]),
            ]);
    }
}
