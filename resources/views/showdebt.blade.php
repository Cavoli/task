<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top"
         alt="...">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the information about student debts in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Debt</th>

            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $debt->firstName }}</td>
                    <td>{{ $debt->lastName }}</td>
                    <td>{{ $debt->debt }}</td>
                    <td>{{ $debt->payment }}</td>
                    <td>

                        <a href="{{ url('/debt/edit/'.$debt->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    </td>


                </tr>
            </tbody>
        </table>
    </div>
</div>






