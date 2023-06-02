<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>

    <form action="{{ route('createBooking') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Personal</h2>
        <label for="booking_name">booking_name</label>
        <input type="text" name="booking_name">
        <label for="booking_phone">booking_phone</label>
        <input type="text" name="booking_phone">
        <label for="booking_gender">booking_gender</label>
        <select name="booking_gender" id="booking_gender">
            <option value="-1" name="booking_gender">Choose...</option>
            <option value="boy" name="booking_gender">male</option>
            <option value="female" name="booking_gender">female</option>
        </select>

        <h2>Barbershop</h2>
        <label for="">Barbershop</label>
        <select name="shop_id" id="shop_id">
            <option value="<?= $shopId ?>" name="shop_id"><?= $shops['shop_name'] ?></option>
        </select>

        <label for="Service">Service</label>

        {{-- @foreach ($services as $service)
        <input type="checkbox" value="{{ $service->id }}" name="booking_service[]" class="service-checkbox">
        <label>{{ $service['service_name'] }}</label>
        @endforeach --}}

        @foreach ($services as $service)
            <input type="checkbox" value="{{ $service->id }}" name="booking_service[]" class="service-checkbox">
            <label>{{ $service['service_name'] }}</label>
            <br>
        @endforeach

        <h2>Services</h2>

        <label for="booking_haircut">Haircut Style</label>
        <select name="booking_haircut" id="booking_haircut">
        @foreach ($haircuts as $haircut)
            <option value="<?= $haircut['id'] ?>" name="booking_haircut"><?= $haircut['haircut_name'] ?></option>
        @endforeach
        </select>

        <label for="booking_note">booking_note</label>
        <input type="text" name="booking_note">

        <br><br>

        <label for="filter_date">Filter by Date</label>
        <input type="date" name="filter_date" id="filter_date">

        <table class="table" id="agenda_table">
            <thead>
                <tr>
                    <th scope="col">Agenda Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agendas as $agenda)
                @if ($agenda->status !== 'Unavailable')
                    <tr class="agenda_row" data-date="{{ date('Y-m-d', strtotime($agenda->date)) }}">
                        <td>
                            <input type="radio" name="agenda_id" value="{{ $agenda->id }}"> {{ $agenda->hairstylist->hairstylist_name }} {{ date('H:i', strtotime($agenda->hour)) }} {{ date('d M', strtotime($agenda->date)) }}
                        </td>
                    </tr>
                @endif
                @endforeach
            </tbody>
        </table>

        <h2>Payment</h2>
        <h2>Total Harga: <span id="total-price"></span></h2>

        <label for="booking_payment_total">Payment Detail</label>
        <input type="text" name="booking_payment_total" id="booking_payment_total" readonly style="display: none;">

        <label for="booking_payment_method">Transaction Method</label>
        <input type="text" name="booking_payment_method">

        <label for="booking_payment_photo">Upload Bukti Transaksi</label>
        <input type="file" name="booking_payment_photo">


        <button type="submit">Insert</button>
    </form>



</body>
</html>
<script>
    const filterInput = document.getElementById('filter_date');
    const agendaRows = document.getElementsByClassName('agenda_row');

    filterInput.addEventListener('input', function() {
        const filterDate = this.value;

        for (let i = 0; i < agendaRows.length; i++) {
            const agendaDate = agendaRows[i].getAttribute('data-date');

            if (agendaDate === filterDate) {
                agendaRows[i].style.display = '';
            } else {
                agendaRows[i].style.display = 'none';
            }
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var services = [
            @foreach($services as $service)
                {
                    id: '{{$service->id}}',
                    price: '{{$service->service_price}}'
                },
            @endforeach
        ];

        function calculateTotalPrice() {
            var totalPrice = 0;
            $('.service-checkbox:checked').each(function() {
                var serviceId = $(this).val();
                var foundService = services.find(function(service) {
                    return service.id === serviceId;
                });

                if (foundService) {
                    var servicePrice = parseInt(foundService.price);
                    totalPrice += servicePrice;
                }
            });

            $('#total-price').text(totalPrice);
            $('#booking_payment_total').val(totalPrice);
        }

        $('.service-checkbox').on('change', function() {
            calculateTotalPrice();
        });

        $('.service-checkbox').each(function() {
            var serviceId = $(this).val();
            var foundService = services.find(function(service) {
                return service.id === serviceId;
            });

            if (foundService) {
                var servicePrice = parseInt(foundService.price);
                $(this).data('price', servicePrice);
            }
        });

        calculateTotalPrice();
    });
</script>
