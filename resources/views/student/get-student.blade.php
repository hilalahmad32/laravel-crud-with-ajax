<x-layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="content">
        @include('student.add-student')
        @include('student.edit-student')
        <div class="container my-5">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3>Student ( <span id="total"></span> )</h3>
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudent">
                            Add Student
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="student-data"></div>
        </div>
    </x-slot>
</x-layout>