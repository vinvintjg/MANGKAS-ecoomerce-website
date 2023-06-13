@extends('layouts.navbar')
@section('content')

<head>
    {{-- <link rel="stylesheet" href={{asset('css/shop-detail.css')}}> --}}
    <link rel="stylesheet" href={{asset('css/form.css')}}>
</head>
    <div class="section-formulir">
    <div class="big-title">Booking Detail</div>
    <form action="{{ route('createBooking') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-section-label">
            Personal
        </div>
        <hr class="line1">
        <label for="booking_name" class="form-label">Name</label>
        <input type="text" class="form-input" name="booking_name" placeholder="Enter Your Name">
        <label for="booking_phone" class="form-label">Phone</label>
        <input type="text" class="form-input" name="booking_phone" placeholder="Enter Your Phone">
        <label for="booking_gender" class="form-label">Gender</label>
        <select name="booking_gender" id="booking_gender" class="form-input">
            <option value="-1" name="booking_gender">Choose Your Gender</option>
            <option value="boy" name="booking_gender">male</option>
            <option value="female" name="booking_gender">female</option>
        </select>

        <div class="form-section-label">
            Barbershop
        </div>
        <hr>
        <label for="" class="form-label">Barbershop</label>
        <input type="text" value="<?= $shops['shop_name'] ?>" class="form-input" readonly>
        {{-- <select name="shop_id" id="shop_id">
            <option value="<?= $shopId ?>" name="shop_id"><?= $shops['shop_name'] ?></option>
        </select> --}}
        <br><br>

        <div class="form-section-label">
            Services
        </div>
        <hr>
        {{-- @foreach ($services as $service)
        <input type="checkbox" value="{{ $service->id }}" name="booking_service[]" class="service-checkbox">
        <label>{{ $service['service_name'] }}</label>
        @endforeach --}}
        <div class="serv-1-line">
        @foreach ($services as $service)
        <div class="serv-1-baris">
            <input type="checkbox" class="form-input" value="{{ $service->id }}" name="booking_service[]" class="service-checkbox">
            <label class="form-label">{{ $service['service_name'] }}</label>
            <br>
        </div>
        @endforeach
        </div>

        <label for="booking_hairstylist" class="form-label">Hairstylist</label>
        <input type="text"  class="form-input" name="booking_hairstylist" placeholder="Choose Your Hairstylist">

        <label for="booking_haircut" class="form-label">Haircut Style</label>
        <select name="booking_haircut" id="booking_haircut" class="form-input" placeholder="Enter Your Haircut Style">
        @foreach ($haircuts as $haircut)
            <option value="<?= $haircut['id'] ?>" name="booking_haircut"><?= $haircut['haircut_name'] ?></option>
        @endforeach
        </select>

        <label for="booking_note" class="form-label">Note</label>
        <input type="text"  class="form-input" name="booking_note" placeholder="Enter Your Note">

        <br><br>

        <label for="filter_date" class="form-label">Date</label>
        <input type="date" class="form-input" name="filter_date" id="filter_date">

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

        <h2>Payment</h2><hr>
        <h2>Total Harga: <span id="total-price"></span></h2>

        <label for="booking_payment_total" class="form-label">Payment Detail</label>
        <input type="text" class="form-input" name="booking_payment_total" id="booking_payment_total" readonly style="display: none;" placeholder="Enter Your Payment Detail">

        <label for="booking_payment_method" class="form-label">Transaction Method</label>
        <input type="text" class="form-input" name="booking_payment_method" placeholder="Enter Your Transaction Method">

        <label for="booking_payment_photo" class="form-label">Proof of Payment</label>
        <input type="file" class="form-input" name="booking_payment_photo" placeholder="Upload Proof of Payment">

        <br><br>
        <button type="submit">SUBMIT</button>
    </form>

    </div>

    <footer class="footer">
        <div class="foot-top">
            <div class="foot-logo">
                <img src="{{asset('assets/logo_navbar.png')}}" alt="logo">
            </div>
            <div class="foot-text">
                <div class="foot-text-1">
                    <a href="/mangkas-home"><div class="foot-text-text">HOME</div></a>
                    <a href="/mangkas-shop"><div class="foot-text-text">SHOP</div></a>
                    <a href="/mangkas-product"><div class="foot-text-text">PRODUCT</div></a>
                </div>
                <div class="foot-text-1">
                    <a href="/mangkas-faq"><div class="foot-text-text">FAQ</div></a>
                    <a href="/mangkas-chat"><div class="foot-text-text">LIVE CHAT</div></a>
                    <a href="/mangkas-contact"><div class="foot-text-text">CONTACT</div></a>
                </div>
                <div class="foot-text-1">
                    <a href="/login"><div class="foot-text-text">SIGN IN</div></a>
                    <a href="/mangkas-home"><div class="foot-text-text">MEMBERSHIP</div></a>
                </div>
            </div>
            <div class="foot-media">
                <div class="foot-media-text">
                    FOLLOW US ON:
                </div>
                <div class="foot-media-logo">
                    <a href="https://www.facebook.com/"><img src="{{asset('assets/media-1.png')}}" alt="logo"></a>
                    <a href="https://web.whatsapp.com/"><img src="{{asset('assets/media-2.png')}}" alt="logo"></a>
                    <a href="https://www.instagram.com/"><img src="{{asset('assets/media-3.png')}}" alt="logo"></a>
                    <a href="https://www.tiktok.com/"><img src="{{asset('assets/media-4.png')}}" alt="logo"></a>
                    <a href="https://www.twitter.com/"><img src="{{asset('assets/media-5.png')}}" alt="logo"></a>
                </div>
            </div>
        </div>
        <div class="foot-bot">
            @2023 Mangkas.com by PT Mangkas | All right reserved.
        </div>
    </footer>

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


    @endsection
