
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .container {
            max-width: 1800px; /* Increased max-width to fit two columns */
            margin: 80 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; /* Adjust alignment as needed */
        }

        .card {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            min-width: 300px; /* Set a minimum width for each card */
            margin-right: 20px; /* Add margin space between cards */
            margin-left: 20px; /* Add margin space between cards */
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        th, td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            margin-right: 10px; /* Optional: Adjust spacing */
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .back-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
            background-color: green;
            color: #fff;
            border: none;
            border-radius: 4px;
        }

        .back-btn:hover {
            background-color: #5a6268;
        }

        .btn-danger{
          background-color: red;
        }
    </style>
</head>
<body>
<x-app-layout>
    @if(Session::has('flash_message'))
    <div class="alert alert-success" style="background-color: green">
        {{ Session::get('flash_message') }}
    </div>
@endif
    <div class="container">
<div class="card">
    <h2 class="card-title">Personal Information</h2>
    <table>
        <tbody>
            <tr>
                <td><strong>Full Name</strong></td>
                @foreach ($resumes as $resume)
                <td>{{ $resume->full_name }}</td>
                @endforeach
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                @foreach ($resumes as $resume)
                <td>{{ $resume->email }}</td>
                @endforeach
            </tr>
            <tr>
                <td><strong>Phone</strong></td>
                @foreach ($resumes as $resume)
                <td>{{ $resume->phone }}</td>
                @endforeach
            </tr>
            <tr>
                <td><strong>Address</strong></td>
                @foreach ($resumes as $resume)
                <td>{{ $resume->address }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>

<!-- Education -->
<div class="card">
    <h2 class="card-title">Education</h2>
    <table>
        <tbody>
            <tr>
                <td><strong>University</strong></td>
                @foreach ($resumes as $resume)
                <td>{{ $resume->university }}</td>
                @endforeach
            </tr>
            <tr>
                <td><strong>Degree</strong></td>
                @foreach ($resumes as $resume)
                <td>{{ $resume->degree }}</td>
                @endforeach
            </tr>
            <tr>
                <td><strong>Start Date</strong></td>
                @foreach ($resumes as $resume)
                <td>{{ $resume->edu_start_date }}</td>
                @endforeach
            </tr>
            <tr>
                <td><strong>End Date</strong></td>
                @foreach ($resumes as $resume)
                <td>{{ $resume->edu_end_date }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>

<!-- Work Experience -->
<div class="card">
    <h2 class="card-title">Work Experience</h2>
    <table>
        <tbody>
            <tr>
                <td><strong>Company</strong></td>
                @foreach ($resumes as $resume)
                <td>{{ $resume->company }}</td>
                @endforeach
            </tr>
            <tr>
                <td><strong>Position</strong></td>
                @foreach ($resumes as $resume)
                <td>{{ $resume->position }}</td>
                @endforeach
            </tr>
            <tr>
                <td><strong>Start Date</strong></td>
                @foreach ($resumes as $resume)
                <td>{{ $resume->work_start_date }}</td>
                @endforeach
            </tr>
            <tr>
                <td><strong>End Date</strong></td>
                @foreach ($resumes as $resume)
                <td>{{ $resume->work_end_date }}</td>
                @endforeach
            </tr>
            <tr>
                <td><strong>Responsibilities</strong></td>
                @foreach ($resumes as $resume)
                <td>{{ $resume->responsibilities }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>

    </div>

    <!-- Submit and Back Buttons -->
    
    <div style="text-align: center; margin-top: 20px;">
        @php
            $hasResumes = $resumes->isNotEmpty(); // Check if resumes collection is not empty
        @endphp
    
        @if(auth()->user()->user_type == 'user')
            @if (!$hasResumes)
                <a href="{{ route('resumes.create') }}" class="btn btn-primary">Add</a>
            @endif

          
            @foreach ($resumes as $resume)

            @foreach ($users as $user)
            <div style="text-align: center; color:white;">
                <p>Chat this employer click the message then search his name good luck</p>
                <p>{{ $user->name }} ({{ $user->user_type }})</p>
            </div>
            @endforeach
            
                <a href="{{ route('resumes.edit', ['resume' => $resume->id]) }}" class="btn back-btn">Edit</a>
                    
                <a href="{{ route('resumes.destroy', ['resume' => $resume->id]) }}" class="btn btn-danger"
                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $resume->id }}').submit();">Delete</a>
    
                <form id="delete-form-{{ $resume->id }}" action="{{ route('resumes.destroy', ['resume' => $resume->id]) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            @endforeach
        @endif
    </div>
</x-app-layout>