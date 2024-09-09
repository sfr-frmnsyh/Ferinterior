<footer class="footer-1 bg-gray-100 py-8 sm:py-12 border-t-2">
    @php
        $aboutus = \App\Models\AboutUs::where('index', '1')->first();
    @endphp

    <div class="container mx-auto px-6">
        <div class="sm:flex sm:flex-wrap sm:-mx-4 m:mt-6 sm:pt-6">
            <div class="px-4 sm:w-1/2 md:w-1/4 mt-4 md:mt-0">
                <h6 class="font-bold mb-2">Address</h6>
                <address class="not-italic mb-4 text-sm">
                    {{@$aboutus->address}}
                </address>
            </div>
            <div class="px-4 sm:w-1/2 md:w-1/4 mt-4 md:mt-0">
                <a href="{{ route('aboutus') }}"><h6 class="font-bold mb-2">About us</h6></a>
                <p class="mb-4 text-sm">About our company <strong>{{@$aboutus->name}}</strong>.
                </p>
            </div>
            <div class="px-4 md:w-1/4 md:ml-auto mt-6 sm:mt-4 md:mt-0">
                
                <div class="text-sm mb-2">
                    <p>©2021 by <span class="font-bold"> sfr-frmnsyh</span></p>
                </div>
                <div class="flex sm:justify-center xl:justify-start mb-2">
                    <a href="{{ @$aboutus->link_facebook }}"
                        class="w-8 h-8 border-2 border-gray-400 rounded-full text-center py-1 text-gray-600 hover:text-white hover:bg-blue-600 hover:border-blue-600">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="{{ @$aboutus->link_twitter }}"
                        class="w-8 h-8 border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-blue-400 hover:border-blue-400">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="{{ @$aboutus->link_instagram }}"
                        class="w-8 h-8 border-2 border-gray-400 rounded-full text-center py-1 ml-2 text-gray-600 hover:text-white hover:bg-pink-600 hover:border-pink-600">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
