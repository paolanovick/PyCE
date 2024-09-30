<x-app :title="'Blogs'">

@section('content')
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->content }}</p>
@endsection
</x-app>