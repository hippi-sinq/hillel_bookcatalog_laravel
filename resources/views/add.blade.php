<form action="{{ route('book_save') }}" method="post">
    @csrf
    <p> Title:
        <input name="title" type="text"/>
    </p>
    <p> Author:
        <input name="author" type="text"/>
    </p>
    <p> Annotations:
        <textarea name="annotations"></textarea>
    </p>
    <p>
        <input type="submit" value="Save"/>
    </p>
</form>
