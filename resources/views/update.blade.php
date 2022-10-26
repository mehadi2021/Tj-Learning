
<form action="{{ route('update.store',$data->id) }}" method="POST" enctype="multipart/form-data">
     @method('put')
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Your Name</label>
        <input name="name"  value="{{ old('name',$data->name )}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">your father name</label>
        <input name="fname" value="{{ old('fname',$data->fname )}}"  type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Product Image</label>
        <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
</form>
