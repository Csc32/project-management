 @foreach ($lastProjects as $projects)
     <a class="w-100 h-auto text-decoration-none font-semibold bg-borderLight flex row gap-1 grow shrink basis-0 justify-center items-center text-md p-2 rounded-lg shadow"
         href="{{ route('admin.projects') }}/{{ $projects->id }}"><x-heroicon-s-document-duplicate style="height: 28px" />
         <span>{{ $projects->name }} </span></a>
 @endforeach
 <a href="{{ route('admin.projects') }}" class="text-route-900 flex row gap-3 justify-center items-center mt-5">
     <span><x-heroicon-o-arrow-long-right style="height: 24px" />
     </span>Ver más <span><x-heroicon-o-arrow-long-left style="height: 24px" /> </span>
 </a>
