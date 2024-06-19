<div {{ $attributes->class(['font-bold'])}}>
    <div class="my-10 border border-zinc-900">
      <div class=" p-8 h-10 bg-green-600 text-3xl flex items-center text-white">
        {{$header}}
      </div>
      <div class=" p-8 grid">
        {{$slot}}
      </div>
    </div>
  </div>