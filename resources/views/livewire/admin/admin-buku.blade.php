<div class="bg-gray-100 min-h-screen w-full col-start-2 col-end-6 px-12">
    
    <div>
        <div class="text-4xl font-bold my-12">
            Books
        </div>
        @if(session('message')!=null)
        <div class="bg-teal-100 border rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
            role="alert">
            <div class="flex">
                <div>
                    <p class="text-sm">{{ session('message') }}</p>
                </div>
            </div>
        </div>
        @endif
        <div class="flex justify-between">
            <div>
                <button wire:click.prevent="openModal" class="flex button-blue rounded-full px-10 py-4 gap-2">
                    <img src="{{asset('img/add.png')}}" class="py-1">
                    <div class="text-2xl text-white font-semibold my-auto">
                        Add Books
                    </div>
                </button>
            </div>
            <div class="my-auto">
                <div class="relative mx-auto text-gray-600 my-auto">
                <input wire:model="search" class=" w-96 p-6 border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-md-center"
                type="search" name="search" placeholder="Search">
                    <button class="absolute right-0 top-0 mt-4 mr-4">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                        width="512px" height="512px">
                        <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full bg-white my-10 rounded-3xl">
            <table class="w-full">
                <thead>
                    <tr class="flex w-full mb-4 pr-4">
                    <th class="text-2xl py-5 w-1/4">ISBN</th>
                    <th class="text-2xl py-5 w-1/4">Author</th>
                    <th class="text-2xl py-5 w-1/4">Title</th>
                    <th class="text-2xl py-5 w-1/4">Publisher</th>
                    <th class="text-2xl py-5 w-1/4">Edit</th>
                    </tr>
                </thead>
                <tbody class="bg-grey-light flex flex-col items-center overflow-y-scroll w-full" style="height: 50vh;" >
                @foreach($bukus as $buku)
                    <tr class="flex w-full">
                    <td class="text-xl font-medium py-3 text-center w-1/4 my-auto">{{$buku->ISBN}}</td>
                    <td class="text-xl font-medium py-3 text-center w-1/4 my-auto">{{$buku->penulis}}</td>
                    <td class="text-xl font-medium py-3 text-center w-1/4 my-auto">{{$buku->judul}}</td>
                    <td class="text-xl font-medium py-3 text-center w-1/4 my-auto">{{$buku->penerbit}}</td>
                    <td class="text-xl font-medium py-3 w-1/4 flex justify-center gap-5 my-auto">
                        <button wire:click.prevent="edit({{$buku->id}})" class="h-8">
                            <img src="{{ asset('img/edit.png') }}">
                        </button>
                        <button wire:click.prevent="delete({{$buku->id}})" class="h-8">
                            <img src="{{ asset('img/delete.png') }}">
                        </button>
                    </td>
                    </tr>
                @endforeach 
                </tbody>
            </table>
        </div>
    </div>
    @if($openModal)
    @include('livewire.admin.modal-buku')
    @endif
</div>
