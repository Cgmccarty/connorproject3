<div class="card row no-gutters">
    <form method="post" action="/posts">
        @csrf
        <input class="form-control" type="text" id="post" name="post" placeholder="What would you like to say? (Max 500 characters)">
        <button type="submit" class="btn form-control" style="background-color: lightblue;">Submit Post</button>
    </form>
</div>
