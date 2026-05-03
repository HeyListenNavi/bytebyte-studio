<?php

namespace App\Filament\Resources\Projects\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Enums\FontWeight;
use Filament\Support\Enums\IconSize;
use Filament\Support\Enums\TextSize;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->contentGrid([
                'sm' => 1,
                'md' => 2,
                'xl' => 3,
            ])
            ->columns([
                Stack::make([
                    ImageColumn::make('thumbnail')
                        ->square()
                        ->disk('public')
                        ->defaultImageUrl('https://placehold.co/600x400?text=No+thumbnail')
                        ->extraImgAttributes(['style' => 'width: 100%; height: auto; border-radius: 16px;']),

                    Split::make([
                        Stack::make([
                            TextColumn::make('title')
                                ->searchable()
                                ->sortable()
                                ->weight(FontWeight::Bold)
                                ->size(TextSize::Large),

                            TextColumn::make('subtitle')
                                ->searchable()
                                ->limit(50)
                                ->color('gray')
                                ->size(TextSize::Small),
                        ]),
                        IconColumn::make('is_published')
                            ->label('Visibilidad')
                            ->icon(fn (bool $state): string => $state ? 'heroicon-m-eye' : 'heroicon-m-eye-slash')
                            ->color(fn (bool $state): string => $state ? 'primary' : 'gray')
                            ->size(IconSize::Medium)
                            ->grow(false),
                    ])->extraAttributes(['class' => 'px-4 py-3']),
                ])
                    ->space(2),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->emptyStateHeading('No hay proyectos registrados')
            ->emptyStateDescription('Comienza creando tu primer proyecto de portafolio.')
            ->emptyStateIcon('heroicon-o-rectangle-stack')
            ->filters([
                SelectFilter::make('is_published')
                    ->label('Estado de Publicación')
                    ->options([
                        '1' => 'Publicados',
                        '0' => 'Borradores',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
