<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Access</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center  bg-[url(projectImages/background.png)] bg-contain ">

    <div class="bg-[#ffffffd7]  shadow-lg rounded-xl p-10 md:flex w-full max-w-4xl relative overflow-hidden">
        <!-- Abstract Blobs background) -->
        <div class="absolute top-0 left-0 w-32 h-32 bg-orange-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
        <div class="absolute bottom-0 right-0 w-32 h-32 bg-yellow-400 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>

        <div class="flex flex-row justify-baseline w-full ">

           <div class="w-1/2   flex flex-col justify-center ">
            <div class="mb-6">
                <div class="w-8 h-8 rounded-full bg-gradient-to-r from-orange-400 to-yellow-400"></div>
                <span class="text-orange-500 font-semibold text-lg">LOGO</span>
            </div>
            <h2 class="text-2xl font-bold mb-2 text-gray-800">Store Inventory Management</h2>
            <p class="text-gray-500 mb-6">Sign in to continue access pages</p>

           </div>

           {{--Input Field --}}
            <div class="w-1/2">

            <form method="POST" action="{{ route( 'registration.store' ) }}" class="space-y-3" enctype="multipart/form-data">
                @csrf

            @if (Session::has( 'success' ))
                <div class="p-4 mb-4 text-sm text-white rounded-xl bg-emerald-500  font-normal" role="alert">
                <span class="font-semibold mr-2">{{ Session::get( 'success' ) }}</span>
                  </div>
            @endif

            @if (Session::has( 'fail' ))
                <div class="p-4 mb-4 text-sm text-white rounded-xl bg-red-500  font-normal" role="alert">
                <span class="font-semibold mr-2">{{ Session::get( 'fail' ) }}</span>
                </div>
            @endif

                    <input 
                        type="text" 
                        name="firstName"
                        id="firstName" 
                        placeholder="Enter Your First Name"
                        class="w-full border-b-2 border-orange-400 focus:outline-none py-1 text-gray-700 placeholder-gray-400 bg-transparent" >
                    @error( 'firstName' )
                        <h4 class="text-red-500 ">{{ $message }}</h4>                   
                    @enderror
                        
                    <input
                        type="text" 
                        name="lastName"
                        id="lastName" 
                        placeholder="Enter Your Last Name"
                        class="w-full border-b-2 border-orange-400 focus:outline-none py-1 text-gray-700 placeholder-gray-400 bg-transparent" >
                    @error( 'lastName' )
                        <h4 class="text-red-500 ">{{ $message }}</h4>                   
                    @enderror    

                    <input
                        type="text" 
                        name="userName"
                        id="userName" 
                        placeholder="Enter Your User Name"
                        class="w-full border-b-2 border-orange-400 focus:outline-none py-1 text-gray-700 placeholder-gray-400 bg-transparent" >
                    @error( 'userName' )
                        <h4 class="text-red-500 ">{{ $message }}</h4>                   
                    @enderror

                    <input
                        type="email" 
                        name="email" 
                        placeholder="Enter Your Email"
                        class="w-full border-b-2 border-orange-400 focus:outline-none py-1 text-gray-700 placeholder-gray-400 bg-transparent" >
                    @error( 'email' )
                        <h4 class="text-red-500 ">{{ $message }}</h4>                   
                    @enderror


                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Enter Your Password"
                        class="w-full border-b-2 border-orange-400 focus:outline-none py-1 text-gray-700 placeholder-gray-400 bg-transparent" >
                    @error( 'password' )
                        <h4 class="text-red-500 ">{{ $message }}</h4>                   
                    @enderror

                    <input
                        type="text" 
                        name="role" 
                        placeholder="Enter Users Role"
                        class="w-full border-b-2 border-orange-400 focus:outline-none py-1 text-gray-700 placeholder-gray-400 bg-transparent" >
                    @error( 'role' )
                        <h4 class="text-red-500 ">{{ $message }}</h4>                   
                    @enderror

                    <input
                        type="file" 
                        name="image" 
                        class="w-full border-b-2 border-orange-400 focus:outline-none py-1 text-gray-700 placeholder-gray-400 bg-transparent" >
                    

                    <button 
                        type="submit" 
                        class="w-full py-1 text-blue-700 font-semibold rounded-full bg-gradient-to-r from-orange-400 to-orange-600 hover:from-orange-500 hover:to-orange-700 transition"
                    >Registration → 
                    </button>
                </form>
                <a  href="{{ route('home') }}" class="text-blue-700 rounded-full transition">Back to login page</a>
                
            </div>
        </div>

        
       
    </div>
        {{-- Regisreation Page Animation --}}
    <style>
        @keyframes blob {
            0%, 100% {
                transform: translate(0px, 0px) scale(1);
            }
            33% {
                transform: translate(30px, -50px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }
        .animate-blob {
            animation: blob 8s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
    </style>

        {{-- Geting Realtime User Name  --}}
    <script>
        const firstName = document.getElementById('firstName');
        const lastName = document.getElementById('lastName');
        const userName = document.getElementById('userName');

    function updateUserName() {
        const fName = firstName.value.trim();
        const lName = lastName.value.trim();
        userName.value = `${fName}${lName}`.replace(/\s+/g, '');
    }

        firstName.addEventListener('input', updateUserName);
        lastName.addEventListener('input', updateUserName);
    </script>

</body>
</html>
