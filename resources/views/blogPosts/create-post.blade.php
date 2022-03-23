@extends('layout')

@section('main')
    <main class="container" style="background-color: #fff">
        <setion id="contact-us">
            <h1 style="padding-top: 50px;">Create New Post!</h1>

            <div class="contact-form">
                <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!--TITLE-->
                    <label for="title"><span>Title</span></label>
                    <input type="text" id="title" name="title">

                    <!--IMAGE-->
                    <label for="image"><span>Image</span></label>
                    <input type="file" id="image" name="image">

                    <!--BODY-->
                    <label for="body"><span>body</span></label>
                    <textarea id="body" name="body"></textarea>

                    <!--BUTTON-->
                    <input type="submit" value="Submit">
                </form>
            </div>
        </setion>
    </main>
    @section('script')
        <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'body' );
        </script>
    @endsection
@endsection

