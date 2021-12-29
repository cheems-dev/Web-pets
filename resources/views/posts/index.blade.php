<x-app-layout>
  <div class=" container py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($posts as $post)
        <article
          class="w-full h-80 bg-cover bg-center @if ($loop->first)
            md:col-span-2
          @endif"
          style="background-image: url(
          @if($post->image)
           {{ Storage::url($post->image->url)}}
          @else
          https://media.istockphoto.com/photos/a-small-dog-and-a-kitten-sleep-at-home-picture-id1265884839?b=1&k=20&m=1265884839&s=170667a&w=0&h=_YdS6fYeJbghZJY4wkqd6wc68yfkYfUZKnnzOjFGIB0=
          @endif)"
        >
          <div class="w-full h-full px-8 flex flex-col justify-center">
            <div>
              @foreach ($post->tags as $tag)
                <a
                  href="{{ route('posts.tag', $tag) }}"
                  class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full"
                >{{ $tag->name }}</a>
              @endforeach
            </div>
            <h1 class="text-4xl text-white font-bold mt-2">
              <a href="{{ route('posts.show', $post) }}">
                {{ $post->name }}
              </a>
            </h1>
          </div>
        </article>
      @endforeach
    </div>
    <div class="mt-4">
      {{ $posts->links() }}
    </div>
  </div>
</x-app-layout>
