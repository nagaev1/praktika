<div {{ $attributes->class(['font-bold'])}}>
    <div class="border-2 border-th-green">
      <div class=" p-8 bg-th-green text-3xl flex items-center text-white">
        {{$header}}
      </div>
      <div class=" p-8 grid">
        {{$slot}}
      </div>
    </div>
  </div>