<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Menggunakan TailwindCSS dari CDN -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Custom styles for modal */
        #inputModal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1000; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.5); /* Black w/ opacity */
            justify-content: center; /* Center modal */
            align-items: center; /* Center modal */
        }
    </style>
</head>

<body class="bg-gray-100">
    <a href="login">LOGIN</a>
    <div class="max-w-3xl mx-auto p-6 border border-gray-300 shadow-lg bg-white mt-10">
        <!-- Card mata kuliah PEMVIS -->
        <div class="bg-white p-5 mb-5 border border-gray-300 shadow-md cursor-pointer transition-transform transform hover:scale-105">
            <h2 class="text-xl font-semibold">PEMVIS</h2>
            <div class="mt-3">
                <div class="flex space-x-4 overflow-x-auto" id="pemvis-materi">
                    <!-- Existing Materi -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm" id="pemvis-materi-1">
                        <h3 class="font-medium">Solution Modeling</h3>
                        <ul class="list-none p-0 m-0" id="pemvis-materi-1-list">
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video1" class="text-blue-600 hover:text-blue-800">Video 1</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video2" class="text-blue-600 hover:text-blue-800">Video 2</a></li>
                        </ul>
                        <div class="flex space-x-2 mt-2">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
                            <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" id="add-pemvis-materi">Tambah Materi</button>
                </div>
            </div>
        </div>

        <!-- Floating Input Modal -->
        <div id="inputModal" class="flex">
            <div class="bg-white p-6 rounded shadow-lg">
                <h3 class="text-lg font-semibold mb-4">Add New Materi</h3>
                <label class="block mb-2">Material Name:</label>
                <input type="text" id="material-name" class="border border-gray-300 p-2 mb-4 w-full" placeholder="Enter material name">
                
                <label class="block mb-2">Video Link:</label>
                <input type="text" id="video-link" class="border border-gray-300 p-2 mb-4 w-full" placeholder="Enter video link">
                
                <label class="block mb-2">Custom URL:</label>
                <input type="text" id="text-alias" class="border border-gray-300 p-2 mb-4 w-full" placeholder="Enter text alias">
                
                <div class="flex justify -between">
                    <button id="submit-materi" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                    <button id="close-modal" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#add-pemvis-materi').click(function() {
                // Show modal
                $('#inputModal').fadeIn();
            });

            $('#close-modal').click(function() {
                // Hide modal
                $('#inputModal').fadeOut();
            });

            $('#submit-materi').click(function() {
                // Get input values
                let materialName = $('#material-name').val();
                let videoLink = $('#video-link').val();
                let textAlias = $('#text-alias').val();

                if (materialName && videoLink && textAlias) {
                    // Add new materi to PEMVIS
                    $('#pemvis-materi').append(`
                        <div class="bg-white p-4 border border-gray-300 shadow-sm">
                            <h3 class="font-medium">${materialName}</h3>
                            <ul class="list-none p-0 m-0">
                                <li class="mb-2"><a href="${videoLink}" class="text-blue-600 hover:text-blue-800">${textAlias}</a></li>
                            </ul>
                            <!-- Admin buttons -->
                            <div class="flex space-x-2 mt-2">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
                                <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </div>
                        </div>
                    `);

                    // Hide modal and clear input fields
                    $('#inputModal').fadeOut();
                    $('#material-name').val('');
                    $('#video-link').val('');
                    $('#text-alias').val('');
                }
            });
        });
    </script>
</body>

</html>