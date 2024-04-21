<div class="relative">
    {{-- <div v-if="visibleHistory" @click="visibleHistory = false" class="fixed top-0 bottom-0 left-0 right-0"></div>
    --}}

    <div class="min-w-[600px] rounded-md overflow-hidden bg-transparent border border-gray-600">
        <form class="flex items-center p-0.5">
            <div class="relative w-full mr-2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>

                <input type="text" id="default-search"
                    class="block w-full p-4 pl-10 text-xs rounded-md  outline-none  font-medium  bg-transparent transition-all"
                    placeholder="What are you looking for ?" autocomplete="off" />
            </div>

            <button type="submit" class="bg-accent p-4 rounded-sm">
                <svg class="w-4 h-4 text-white font-bold" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </button>
        </form>
    </div>

    <!-- Search History -->
    {{-- <div v-if="
        visibleHistory &&
        (searchSuggestions?.length || filteredUserSearchHistories?.length) &&
        searchedKeyword?.length > 0
      "
        class="border border-slate-300 shadow-lg absolute bg-white mt-3 rounded-md text-gray-600 py-3 h-auto w-full max-h-[500px] overflow-auto">
        <ul class="text-xs font-medium">
            <li v-if="filteredUserSearchHistories?.length !== 0">
                <ul>
                    <li class="px-5 py-3">
                        <h3 class="font-bold text-slate-600">
                            <i class="fa-solid fa-clock mr-3"></i>
                            Your Search History
                        </h3>
                    </li>
                    <li v-for="(history, index) in filteredUserSearchHistories" :key="history.id"
                        class="hover:bg-orange-100 px-5 py-3 flex items-center justify-between cursor-pointer">
                        <span v-if="history.user_id === $page.props.auth.user?.id"
                            class="flex items-center justify-between w-full">
                            <span @click="handleSearchInputKeyword(history.keyword)"
                                v-html="highlightKeyword(history.keyword)" class="w-full">
                            </span>

                            <button type="button" @click="handleRemoveSearchHistory(index, history.id)"
                                class="w-2.5 h-2.5 rounded-full flex items-center justify-center text-sm hover:text-orange-500 hover:bg-orange-100 transition-all cursor-pointer">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </span>
                    </li>
                </ul>
            </li>

            <li v-show="filteredUserSearchHistories?.length && searchSuggestions?.length" class="px-5 py-3">
                <hr />
            </li>

            <li v-if="params.search?.length >= 1 && searchSuggestions?.length !== 0">
                <ul>
                    <li class="px-5 py-3">
                        <h3 class="font-bold text-main-orange">
                            <i class="fa-solid fa-lightbulb mr-3"></i>
                            Suggest Search
                        </h3>
                    </li>

                    <li v-for="history in searchSuggestions" :key="history.id"
                        class="hover:bg-orange-100 px-5 py-3 cursor-pointer">
                        <p @click="handleSearchInputKeyword(history.keyword)" v-html="highlightKeyword(history.keyword)"
                            class="w-full"></p>
                    </li>
                </ul>
            </li>
        </ul>
    </div> --}}
</div>
