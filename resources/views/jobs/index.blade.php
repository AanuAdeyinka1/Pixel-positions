@props(['job'])

<x-layout>
    <div class="space-y-10">
 
     <section class="text-center pt-6">
      
        <h1 class="font-bold text-4xl" >Let's Find You Your Next Job</h1>
    
       {{-- <form action="" method="" class="mt-6">
         <input type="text" placeholder="I'm looking for..."class="rounded-xl bg-white/5 border border-white/10 py-4 px-5 w-full max-w-xl ">
     </form> --}}
     <x-forms.form action="/search" class="mt-6">
        <x-forms.input :label="false" name="q" placeholder="Web Developer..." />
    </x-form.form>
     
     </section>
 
     <section class="pt-10">
         <x-section-heading>Featured Jobs</x-section-heading>
        
         <div class="container mx-auto">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
              @foreach ($featuredJobs as $job)
                  <x-job-card :job="$job" />
              @endforeach
          </div>
      </div>
       </section>
   
       <section>
           <x-section-heading>Tags</x-section-heading>
           <div class="mt-6 space-x-1">
            @foreach ($tags as $tag)
              <x-tag :$tag/>
            @endforeach
           
           </div>
       </section>
   
       <section>
           <x-section-heading>Recent Jobs</x-section-heading>
                 
             <div class="mt-6 space-y-6" >
             
            @foreach ($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
             </div>
         </section>
    </div>
 
 </x-layout>  
         