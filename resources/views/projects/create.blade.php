@extends('layouts.app')

@section('content')

<h1>Create a Project</h1>

<form method="POST" action="/projects">
    @csrf

    <div class="field mb-6">
        <label class="label text-sm mb-2 block" for="title">Title</label>

        <div class="control">
            <input
                type="text"
                class="input bg-transparent border border-muted-light rounded p-2 text-xs w-full"
                name="title"
                placeholder="My next awesome project"
                required
                >
        </div>
    </div>

    <div class="field mb-6">
        <label class="label text-sm mb-2 block" for="description">Description</label>

        <div class="control">
            <textarea
                name="description"
                rows="10"
                class="textarea bg-transparent border border-muted-light rounded p-2 text-xs w-full"
                placeholder="I should start learning piano."
                required></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link mr-2">Create project</button>

            <a href="/projects" class="text-default">Cancel</a>
        </div>
    </div>

</form>

@endsection
