<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Room Vacancy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Update Room Vacancy</h1>
        <form class="mt-5">
            <div class="form-group">
                <label for="room_number">Room Number</label>
                <input type="text" class="form-control" id="room_number" placeholder="Enter room number">
            </div>
            <div class="form-group">
                <label for="room_type">Room Type</label>
                <input type="text" class="form-control" id="room_type" placeholder="Enter room type">
            </div>
            <div class="form-group">
                <label for="vacancy_status">Vacancy Status</label>
                <select class="form-control" id="vacancy_status">
                    <option value="vacant">Vacant</option>
                    <option value="occupied">Occupied</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </form>
    </div>
</body>
</html>
