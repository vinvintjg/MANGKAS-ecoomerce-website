<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
    <form action="{{ route('createMembership') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">membership_name</label>
        <input type="text" name="membership_name">
        <label for="">membership_type</label>
        <select name="membership_type" id="membership_type">
            <option value="-1" name="membership_type">Choose...</option>
            <option value="silver" name="membership_type">silver</option>
            <option value="bronze" name="membership_type">bronze</option>
            <option value="gold" name="membership_type">gold</option>
            <option value="platinum" name="membership_type">platinum</option>
        </select>
        <label for="">user_id</label>
        <input type="text" name="user_id">
        <label for="">membership_phone</label>
        <input type="text" name="membership_phone">
        <label for="">membership_email</label>
        <input type="text" name="membership_email">

        <button type="submit">Insert</button>
    </form>

</body>
</html>
