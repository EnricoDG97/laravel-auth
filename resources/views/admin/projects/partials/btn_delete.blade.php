<div class="d-inline-block">
    <form action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
    </form>
</div>
