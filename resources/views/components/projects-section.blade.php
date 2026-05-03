@props(['type', 'projects'])

@foreach ($projects as $project)
    @if ($type === 'card')
        <x-project-card 
            :title="$project->title" 
            :subtitle="$project->subtitle"
            :description="$project->project_description"
            :href="route('project.show', $project->slug)" 
            :src="Storage::url($project->thumbnail)"
        />
    @elseif ($type === 'preview')
        <x-project-preview 
            :title="$project->title" 
            :background="Storage::url($project->thumbnail)" 
            :href="route('project.show', $project->slug)"
        />
    @endif
@endforeach
