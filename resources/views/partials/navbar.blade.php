<nav class="border fixed split-nav">
    <div class="nav-brand">
        <h3><a href="{{ url('/') }}">{{ config('app.name', 'My Blog') }}</a></h3>
    </div>
    <div class="collapsible">
        <input id="collapsible1" type="checkbox" name="collapsible1">
        <button>
            <label for="collapsible1">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </label>
        </button>
        <div class="collapsible-body">
            <ul class="inline">
                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('add') }}">Add Post</a></li>
                <li><a href="{{ url('edit') }}">Edit post</a></li>
            </ul>
        </div>
    </div>
</nav>
