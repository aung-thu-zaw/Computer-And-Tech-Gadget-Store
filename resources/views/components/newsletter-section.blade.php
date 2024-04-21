<div class="container mx-auto  rounded-md border border-neutral-700 flex flex-col md:flex-row items-center justify-center space-y-10 md:space-y-0 lg:space-x-52 w-full h-full bg-gray-100 min-w-screen p-20"
    :style="{
  'background-image': 'url(https://img.freepik.com/premium-photo/photo-computer-accessories-photographers_778780-6362.jpg)',
  'background-repeat': 'no-repeat',
  'background-size': 'cover',
  'background-position': 'center',
  'background-color': 'rgba(0, 0, 0, 0.7)',
  'background-blend-mode': 'darken'
}">

    <h1 class="font-extrabold text-2xl text-white text-center md:text-left w-[400px]">
        Subscribe Our Newsletter To Get Latest Product Update
    </h1>

    <div>
        <form>
            <div
                class="flex items-center flex-row gap-3 bg-black bg-opacity-50 border border-neutral-600 rounded-full p-2 w-[350px] shadow-sm">
                <div class="w-full">
                    <input type="email" id="subscribe-email" name="subscribe-email"
                        class="py-3 px-4 block w-full border-none rounded-lg text-sm disabled:opacity-50 disabled:pointer-events-none focus:ring-0 focus:outline-none font-semibold bg-transparent placeholder:text-white text-white"
                        placeholder="Enter your email" v-model="form.email" autocomplete="off" />
                </div>
                <button type="submit"
                    class="w-full sm:w-auto whitespace-nowrap p-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent bg-accent text-white  disabled:opacity-50 disabled:pointer-events-none">
                    <i class="fa-solid fa-paper-plane"></i>
                    Subscribe
                </button>
            </div>
        </form>
    </div>
</div>
