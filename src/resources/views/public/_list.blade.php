<ul class="objects-list">
    @foreach ($items as $object)
    @include('objects::public._list-item')
    @endforeach
</ul>
