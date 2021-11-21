<html>
    <head>
        <title>Travel Port</title>
        <style>
            .from_class{
                border: 5px solid #d21f1f;
                width: 60%;
            }
            .row{
                    padding: 7px 6px;
                    width: 46%;
            }
        </style>
    </head>
    <body>
        <center>
            <form action="/api/flight_check" method="post" class="from_class">
                <div class="row col-md-6">
                    <label>From : </label>
                    <input type="text" name="origin" placeholder="Enter your From city">
                </div>
                <div class="row col-md-6">
                    <label>To : </label>
                    <input type="text" name="destination" placeholder="Enter your To city">
                </div>
                <div class="row col-md-6">
                    <label>Date Of journey : </label>
                    <input type="text" name="date" placeholder="Enter your journey date">
                </div>
                <div class="row col-md-6">
                    <label>Adult : </label>
                    <select name="acount">
                        <option value="">Select Adult</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                    </select>
                </div>
                <div class="row col-md-6">
                    <label>Child : </label>
                    <select name="ccount">
                        <option value="">Select Child</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                    </select>
                </div>
                <div class="row col-md-6">
                    <label>Infant : </label>
                    <select name="icount">
                        <option value="">Select Infant</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                    </select>
                </div>
                <div class="row col-md-6">
                    <button type="submit" class="btn">Submit</button> 
                </div>
            </form>
        </center>
    </body>
</html>