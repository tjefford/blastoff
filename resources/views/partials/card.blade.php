<div class="max-w-sm w-full lg:max-w-full lg:flex shadow mb-8">
  <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{ $launch->rocket->imageURL }}')" title="{{ $launch->rocket->name }}">
  </div>
  <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal w-full">
    <div class="mb-8">
      <p class="text-sm text-gray-600 flex items-center">
        {{ $launch->windowstart }} &nbsp; <span class="rounded-full py-1 px-2 bg-green-200 text-gray-600">{{ $launch->status }}</span>
      </p>
      <div class="text-gray-900 font-bold text-xl mb-2">{{ $launch->name }}</div>
      @if(count($launch->missions) > 0)
        <p class="text-gray-700 text-base">{{ $launch->missions[0]->description }}</p>
      @endif
    </div>
    <div class="flex items-center">
      <div class="text-sm">
        <p class="text-gray-900 leading-none">{{ $launch->rocket->name }}</p>
        @if(count($launch->missions) > 0)
          <p class="text-gray-600">{{ $launch->missions[0]->typeName }}</p>
        @endif
      </div>
    </div>
  </div>
</div>
