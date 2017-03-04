
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Climate</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
      body {
        padding-top: 100px;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Climate</a>
            </div>
          </div>
        </nav>

        <div class="container">
          <form>
            <div class="form-group">
              <label>City</label>
              <select name="city_name" required="" class="form-control" >
                <option value="">Pilih Choose Your City</option>
                <option value="medan" {{ $city_name === 'medan'? 'selected' : '' }} >Medan</option>
                <option value="jakarta" {{ $city_name === 'jakarta'? 'selected' : '' }} >Jakarta</option>
                <option value="tokyo" {{ $city_name === 'tokyo'? 'selected' : '' }} >Tokyo</option>
                <option value="london" {{ $city_name === 'london'? 'selected' : '' }} >London</option>
              </select>
            </div>
             <button type="submit" class="btn btn-default pull-right">Find</button>
          </form>
          @if( !is_null($forecast) )
          <h3>Result</h3>
          <div class="row">
            <div class="col-md-5">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>{{ $forecast->city_name }}</th>
                    <th align="right">Temperature</th>
                    <th align="right">Variance</th>
                  </tr>
                </thead> 
                <tbody>
                  @foreach($forecast->lists as $l)
                    <tr>
                    <td>{{ $l->date }}</td>
                    <td>{{ $l->temperature }}C</td>
                    <td>{{ $l->variance }}C</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          @endif
        </div>
  </body>
</html>
