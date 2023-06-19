@extends('layouts.navbar')
@section('content')

    <head>
        {{-- <link rel="stylesheet" href={{asset('css/shop-detail.css')}}> --}}
        <link rel="stylesheet" href={{ asset('css/form.css') }}>
    </head>

    <div class="section-formulir">
        <div class="big-title">Booking Detail</div>
        <form action="{{ route('createBooking') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-column">
                    <div class="form-section-label">
                        Personal
                    </div>
                    <hr>
                    <label for="booking_name" class="form-label">Name</label>
                    <input type="text" class="form-input" name="booking_name" placeholder="Enter Your Name">
                    <label for="booking_phone" class="form-label">Phone</label>
                    <input type="text" class="form-input" name="booking_phone" placeholder="Enter Your Phone">
                    <label for="booking_gender" class="form-label">Gender</label>
                    <div class="select-wrapper">
                        <select name="booking_gender" id="booking_gender" class="form-input">
                            <option value="-1" name="booking_gender">Choose Your Gender</option>
                            <option value="boy" name="booking_gender">male</option>
                            <option value="female" name="booking_gender">female</option>
                        </select>
                        <span class="dropdown-icon" for="booking_gender">&#9660;</span>
                    </div>
                </div>

                <div class="form-column">
                    <div class="form-section-label">
                        Barbershop
                    </div>
                    <hr>

                    <label for="shop_name" class="form-label">Barbershop</label>
                    {{-- <input type="text" name="shop_id" value="<?= $shopId ?>" class="form-input" readonly> --}}
                    <div class="select-wrapper">
                        <select name="shop_id" id="shop_id" class="form-input">
                            <option value="<?= $shopId ?>" name="shop_id"><?= $shops['shop_name'] ?></option>
                        </select>
                    </div>
                    {{-- @foreach ($services as $service)
                <input type="checkbox" value="{{ $service->id }}" name="booking_service[]" class="service-checkbox">
                <label>{{ $service['service_name'] }}</label>
                @endforeach --}}
                    <div class="serv-1-line">
                        <label for="booking_service" class="form-label">Services</label>
                        @foreach ($services as $service)
                            <div class="serv-1-baris">
                                <label class="container">{{ $service['service_name'] }}
                                    <input type="checkbox" value="{{ $service->id }}" name="booking_service[]"
                                        class="service-checkbox">
                                    <span class="checkmark"></span>
                                </label>

                                {{-- <input type="checkbox" class="form-input" value="{{ $service->id }}" name="booking_service[]" class="service-checkbox">
                    <label class="form-label">{{ $service['service_name'] }}</label>
                    <br> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="form-section-label">
                Detail Services
            </div>
            <hr>

            <div class="form-row">
                <div class="form-column">
                    {{-- <label for="booking_hairstylist" class="form-label">Hairstylist</label>
                    <div class="select-wrapper">
                        <select name="" id="" class="form-input">
                            <option value="-1" name="">Choose Hairstylist</option>
                            @foreach ($hairstylists as $hairstylist)
                                <option value="<?= $hairstylist['id'] ?>" name="">
                                    <?= $hairstylist['hairstylist_name'] ?></option>
                            @endforeach
                        </select>
                        <span class="dropdown-icon">&#9660;</span>
                    </div> --}}
                    <label for="booking_haircut" class="form-label">Haircut Style</label>
                    <div class="select-wrapper">
                        <select name="booking_haircut" id="booking_haircut" class="form-input"
                            placeholder="Enter Your Haircut Style">
                            <option value="-1" name="">Choose Haircut</option>
                            @foreach ($haircuts as $haircut)
                                <option value="<?= $haircut['id'] ?>" name="booking_haircut"><?= $haircut['haircut_name'] ?>
                                </option>
                            @endforeach
                        </select>
                        <span class="dropdown-icon">&#9660;</span>
                    </div>
                    <label for="booking_note" class="form-label">Note</label>
                    <input type="text" class="form-input" name="booking_note" placeholder="Enter Your Note">

                </div>
                <div class="form-column">
                    <label for="filter_date" class="form-label">Date</label>
                    <input type="date" class="form-input" name="filter_date" id="filter_date">

                    {{-- @foreach ($agendas as $agenda)
                        @if ($agenda->status !== 'Unavailable')
                            <tr class="agenda_row" data-date="{{ date('Y-m-d', strtotime($agenda->date)) }}">
                                <td>
                                    <input type="radio" name="agenda_id" id="{{ $agenda->id }}"
                                        value="{{ $agenda->id }}">
                                    <label for="{{ $agenda->id }}">
                                        <h4>{{ $agenda->hairstylist->hairstylist_name }}</h4>
                                        <p>{{ date('H:i', strtotime($agenda->hour)) }}
                                            {{ date('d M', strtotime($agenda->date)) }}</p>
                                    </label>
                                </td>
                            </tr>
                        @endif
                    @endforeach --}}

                    <table class="table_agenda" id="agenda_table">
                        @foreach ($agendas as $agenda)
                        @if ($agenda->status !== 'Unavailable')
                            <td class="agenda_row" data-date="{{ date('Y-m-d', strtotime($agenda->date)) }}">
                                <input type="radio" name="agenda_id" id="{{ $agenda->id }}" value="{{ $agenda->id }}">
                                <label for="{{ $agenda->id }}" class="label_agenda">
                                <h4>{{ $agenda->hairstylist->hairstylist_name }}</h4>
                                <p>{{ date('H:i', strtotime($agenda->hour)) }} | {{ date('d M', strtotime($agenda->date)) }}</p>
                                </label>
                            </td>
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="form-section-label">
                Payment
            </div>
            <hr>

            <div class="form-row">
                <div class="form-column">
                    <label for="booking_payment_total" class="form-label">Payment Detail</label>
                    <div class="form-column-pay">
                        <div class="form-total-pay">Total Harga:</div>
                        <div class="form-total-pay">Rp <span id="total-price"></span></div>
                    </div>
                    <input type="text" class="form-input" name="booking_payment_total" id="booking_payment_total"
                        readonly style="display: none;" placeholder="Enter Your Payment Detail">
                </div>
                <div class="form-column">
                    <label for="booking_payment_method" class="form-label">Transaction Method</label>
                    <input type="text" class="form-input" name="booking_payment_method"
                        placeholder="Enter Your Transaction Method">
                </div>
            </div>
            <div class="form-pay-section">
                <div class="form-section-label">
                    Proof of Payment
                </div>

                <div class="form-file">
                    <img src="{{ asset('assets/pay-file.png') }}" alt="logo">
                    <div class="form-total-pay">Format: JPG, JPEG, PNG, max 10 MB</div>
                    <input type="file" class="custom-file-input" name="booking_payment_photo">
                </div>
            </div>

            <div class="button-form button-width">
                <button type="submit">SUBMIT</button>
            </div>

        </form>

    </div>

    <footer class="footer">
        <div class="foot-top">
            <div class="foot-logo">
                <img src="{{ asset('assets/logo_navbar.png') }}" alt="logo">
            </div>
            <div class="foot-text">
                <div class="foot-text-1">
                    <a href="/mangkas-home">
                        <div class="foot-text-text">HOME</div>
                    </a>
                    <a href="/mangkas-shop">
                        <div class="foot-text-text">SHOP</div>
                    </a>
                    <a href="/mangkas-product">
                        <div class="foot-text-text">PRODUCT</div>
                    </a>
                </div>
                <div class="foot-text-1">
                    <a href="/mangkas-faq">
                        <div class="foot-text-text">FAQ</div>
                    </a>
                    {{-- <a href="/mangkas-chat">
                        <div class="foot-text-text">LIVE CHAT</div>
                    </a> --}}
                    <a href="/mangkas-contact">
                        <div class="foot-text-text">CONTACT</div>
                    </a>
                </div>
                <div class="foot-text-1">
                    <a href="/login">
                        <div class="foot-text-text">SIGN IN</div>
                    </a>
                    <a href="/mangkas-home">
                        <div class="foot-text-text">MEMBERSHIP</div>
                    </a>
                </div>
            </div>
            <div class="foot-media">
                <div class="foot-media-text">
                    FOLLOW US ON:
                </div>
                <div class="foot-media-logo">
                    <a href="https://www.facebook.com/"><img src="{{ asset('assets/media-1.png') }}" alt="logo"></a>
                    <a href="https://web.whatsapp.com/"><img src="{{ asset('assets/media-2.png') }}" alt="logo"></a>
                    <a href="https://www.instagram.com/"><img src="{{ asset('assets/media-3.png') }}"
                            alt="logo"></a>
                    <a href="https://www.tiktok.com/"><img src="{{ asset('assets/media-4.png') }}" alt="logo"></a>
                    <a href="https://www.twitter.com/"><img src="{{ asset('assets/media-5.png') }}" alt="logo"></a>
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
                @foreach ($services as $service)
                    {
                        id: '{{ $service->id }}',
                        price: '{{ $service->service_price }}'
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
