@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Form for project</h3>
        </div>


        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" id="inputFirstName" placeholder="Enter your fisrt name" required>
                </div>
                <div class="form-group">
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" id="inputLastName" placeholder="Enter your last name"
                        required>
                </div>
                <div class="form-group">
                    <label for="inputBirthdate">Date/month/year</label>
                    <input type="date" class="form-control" id="inputBirthdate" required>
                </div>
                <div class="form-group">
                    <label for="inputAge">Age</label>
                    <input type="text" class="form-control" id="inputAge" placeholder="Enter your Age" required>
                </div>
                <div class="form-group">
                    <label class="inputGender">Gender</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="male" name="gender" value="male"
                            required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="female" name="gender" value="female"
                            required>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPicture">Picture</label>
                    <input type="file" class="form-control" id="inputPicture" accept="image/*" required>
                </div>

                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <textarea class="form-control" id="address" rows="3" placeholder="Enter your Address" required></textarea>
                </div>

                <div class="form-group">
                    <label for="inputColor">color</label>
                    <select class="form-select" id="color">
                        <option value="red">red</option>
                        <option value="blue">blue</option>
                        <option value="green">green</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputMusic">Music</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="pop" name="music" value="pop" required>
                        <label class="form-check-label" for="pop">Pop</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="rock" name="music" value="pop" required>
                        <label class="form-check-label" for="rock">rock</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="rap" name="music" value="pop" required>
                        <label class="form-check-label" for="rap">rap</label>
                    </div>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </div>

            <div class="card-footer">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
@stop
