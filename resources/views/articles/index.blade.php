<x-app title="Articles">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        @forelse ($articles as $article)
      <x-card title="{{$article->title}}"
        subtitle="{{ \Carbon\Carbon::parse($article->created_at)->format('d F, Y') }}">
        {{ $article->body}}
      </x-card>
    @empty
    <div class="alert alert-info">Tidak ada data</div>
  @endforelse
      </div>
    </div>
  </div>
</x-app>