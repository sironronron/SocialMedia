<template>
    <div class="flex flex-row h-screen bg-gray-100">
        <div class="flex flex-col justify-between items-center flex-none w-16 bg-gray-200">
            <div class="flex flex-col w-full items-center">
                <a href="#" class="block relative w-full h-16 w-16 flex justify-center items-center bg-gray-100">
                    <img class="h-8 w-8 rounded-full object-cover w-8 h-8" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name" />
                </a>
                <a href="#" class="block relative w-full h-16 w-16 flex justify-center items-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                </a>
                <a href="#" class="block relative w-full h-16 w-16 flex justify-center items-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                    <div class="absolute top-0 right-0 mr-4 mt-4 bg-red-500 w-4 h-4 text-xs text-white rounded-full text-center flex flex-col items-center">
                        5
                    </div>
                </a>
                <a href="#" class="block relative w-full h-16 w-16 flex justify-center items-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    <div class="absolute top-0 right-0 mr-4 mt-4 bg-red-500 w-4 h-4 text-xs text-white rounded-full text-center flex flex-col items-center">
                        10
                    </div>
                </a>
                
                <a href="#" class="block relative w-full h-16 w-16 flex justify-center items-center">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </a>
            </div>
            <div class="flex flex-col pb-5">
                
                <a href="#" class="block relative w-full h-16 w-16 flex justify-center items-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </a>
            </div>
        </div>

        <div class="w-72 flex-none bg-gray-100 p-4 flex flex-col space-y-4">
            <div class="flex flex-row justify-between items-center mb-16">
                <h1 class="font-semibold text-2xl">Inbox</h1>
                <svg class="flex-none w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>

            <div class="bg-red-200 h-64"></div>
            <div class="bg-red-200 h-64"></div>
        </div>

        <div class="flex flex-row flex-auto bg-white rounded-tl-xl border-l shadow-xl">
            <div class="w-4/5 border-l border-r border-gray-400 flex flex-col">
                <div class="flex-none h-16 flex flex-row justify-between items-center border-b p-5">
                    <div class="flex flex-col space-y-1">
                        <strong>Nikola Tesla</strong>
                        <input type="text" class="text-sm p-0 border-none focus:outline-none text-black-600 placeholder-gray-600" placeholder="Add conversation title" />
                    </div>
                    <div class="flex flex-row items-center space-x-4">
                        <a href="#">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path></svg>
                        </a>
                        <a href="#">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </a>
                        <a href="#">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                        </a>
                        <a href="#">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </a>
                        <a href="#">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="flex-auto overflow-y-auto p-5 space-y-4"
                    style="background-image: url(https://res.cloudinary.com/http-book-keeping-com/image/upload/v1611063953/Friendwave/2d9dd173426833.5c08f5634ff45.png)"
                >
                    <div class="flex flex-row space-x-2">
                        <svg class="flex-none w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div class="flex flex-col space-y-2">
                            <div class="bg-gray-200 rounded p-3 max-w-lg">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                            <div class="text-sm text-gray-500">
                                5 minutes ago
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row space-x-2 space-x-reverse flex-row-reverse">
                        <svg class="flex-none w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div class="flex flex-col space-y-2">
                            <div class="bg-blue-100 rounded p-3 max-w-lg">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </div>
                            <div class="text-sm text-gray-500">
                                5 minutes ago
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row space-x-2 space-x-reverse flex-row-reverse">
                        <svg class="flex-none w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div class="flex flex-col space-y-2">
                            <div class="bg-blue-100 rounded p-3 max-w-lg">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </div>
                            <div class="text-sm text-gray-500">
                                5 minutes ago
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row justify-center text-sm text-gray-500">
                        You assigned this conversation to yourself 5 days ago
                    </div>

                    <div class="flex flex-row space-x-2">
                        <svg class="flex-none w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <div class="flex flex-col space-y-2">
                            <div class="bg-gray-200 rounded p-3 max-w-lg">
                                Lorem Ipsum is simply dummy text.
                            </div>
                            <div class="text-sm text-gray-500">
                                5 minutes ago
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex-none h-40 p-4 pt-0">
                    <textarea class="w-full h-full outline-none border-gray-100 hover:border-blue-600 rounded shadow-lg">Hi</textarea>
                </div>
            </div>

            <div class="w-1/5 bg-gray-200 overflow-y-auto flex flex-col">
                <div class="h-64 flex-none border-b border-gray-400"></div>
                
                <div class="flex flex-col space-y-3 p-4">
                    <div class="flex flex-none h-64 bg-white border rounded p-4 justify-center items-center">
                        Card Content
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       
        methods: {
            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    }
</script>
