@props(['text','routeName', 'active'=>false, 'icon'])
<li>
    <a href="{{route($routeName)}}"
        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
        <span class="w-6 text-center {{$icon}}"></span>
        <span class="ml-3">{{$text}}</span>
    </a>
</li>