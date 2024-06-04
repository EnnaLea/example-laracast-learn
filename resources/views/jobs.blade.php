<x-layout>
    <x-slot:heading>
       Jobs Listing
    </x-slot:heading> 
    @foreach ($jobs as $job)
    <li>
        <a href= "/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
        <strong>{{$job['title']}}</strong> : Pays {{$job['salary']}} per year.
        </a>
    </li>
@endForeach
</x-layout>