@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-white border rounded-lg shadow p-4 text-center flex flex-col items-center justify-center gap-2">
                <span class="mdi mdi-account-group-outline text-3xl text-blue-600"></span>
                <h5 class="text-gray-500">Total Customers</h5>
                <h2 class="text-2xl font-bold">120</h2>
            </div>

            <div class="bg-white border rounded-lg shadow p-4 text-center flex flex-col items-center justify-center gap-2">
                <span class="mdi mdi-calendar-clock-outline text-3xl text-green-600"></span>
                <h5 class="text-gray-500">Today Appointments</h5>
                <h2 class="text-2xl font-bold">8</h2>
            </div>

            <div class="bg-white border rounded-lg shadow p-4 text-center flex flex-col items-center justify-center gap-2">
                <span class="mdi mdi-scissors-cutting text-3xl text-purple-600"></span>
                <h5 class="text-gray-500">Total Barbers</h5>
                <h2 class="text-2xl font-bold">4</h2>
            </div>

            <div class="bg-white border rounded-lg shadow p-4 text-center flex flex-col items-center justify-center gap-2">
                <span class="mdi mdi-cash-multiple text-3xl text-yellow-600"></span>
                <h5 class="text-gray-500">Monthly Revenue</h5>
                <h2 class="text-2xl font-bold">$1,250</h2>
            </div>
        </div>

        <!-- Actions -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="#"
                class="bg-secondary text-white py-3 rounded-lg text-center font-semibold hover:bg-blue-700 flex items-center justify-center gap-2">
                <span class="mdi mdi-plus-box-outline text-xl"></span>
                New Appointment
            </a>

            <a href="#"
                class="bg-gray-600 text-white py-3 rounded-lg text-center font-semibold hover:bg-gray-700 flex items-center justify-center gap-2">
                <span class="mdi mdi-account-outline text-xl"></span>
                View Customers
            </a>

            <a href="#"
                class="bg-black text-white py-3 rounded-lg text-center font-semibold hover:bg-gray-800 flex items-center justify-center gap-2">
                <span class="mdi mdi-scissors-cutting text-xl"></span>
                Manage Barbers
            </a>
        </div>


        <!-- Appointments Table -->
        <div class="bg-white border rounded-lg shadow overflow-hidden">
            <div class="px-4 py-3 border-b font-semibold">
                Latest Appointments
            </div>

            <table class="w-full text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2">Customer</th>
                        <th class="px-4 py-2">Barber</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="px-4 py-2">John Doe</td>
                        <td class="px-4 py-2">Alex</td>
                        <td class="px-4 py-2">2026-01-21</td>
                        <td class="px-4 py-2 text-green-600">Confirmed</td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-4 py-2">Michael</td>
                        <td class="px-4 py-2">David</td>
                        <td class="px-4 py-2">2026-01-21</td>
                        <td class="px-4 py-2 text-yellow-600">Pending</td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-4 py-2">Chris</td>
                        <td class="px-4 py-2">Ryan</td>
                        <td class="px-4 py-2">2026-01-20</td>
                        <td class="px-4 py-2 text-blue-600">Completed</td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-4 py-2">William</td>
                        <td class="px-4 py-2">Alex</td>
                        <td class="px-4 py-2">2026-01-20</td>
                        <td class="px-4 py-2 text-red-600">Cancelled</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
