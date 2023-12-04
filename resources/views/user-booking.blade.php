@extends('layouts.navbar')
@section('content')

    <head>
        <link rel="stylesheet" href={{ asset('css/form.css') }}?t={{ env('VERSION_TIME') }}>
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
                    <input type="text" class="form-input" name="booking_name" value="{{ old('booking_name') }}"
                        placeholder="Enter Your Name">
                    @error('booking_name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="booking_phone" class="form-label">Phone</label>
                    <input type="text" class="form-input" name="booking_phone" value="{{ old('booking_phone') }}"
                        placeholder="Enter Your Phone">
                    @error('booking_phone')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="booking_gender" class="form-label">Gender</label>
                    <div class="select-wrapper">
                        <select name="booking_gender" id="booking_gender" class="form-input">
                            <option value="-1" name="booking_gender">Choose Your Gender</option>
                            <option value="Male" name="booking_gender"
                                {{ old('booking_gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" name="booking_gender"
                                {{ old('booking_gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                        <span class="dropdown-icon" for="booking_gender">&#9660;</span>
                    </div>
                    @error('booking_gender')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-column">
                    <div class="form-section-label">
                        Barbershop
                    </div>
                    <hr>

                    <label for="shop_name" class="form-label">Barbershop</label>
                    <div class="select-wrapper">
                        <select name="shop_id" id="shop_id" class="form-input">
                            <option value="<?= $shopId ?>" name="shop_id"><?= $shops['shop_name'] ?></option>
                        </select>
                    </div>
                    @error('shop_name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="serv-1-line">
                        <label for="booking_service" class="form-label">Services</label>
                        @foreach ($services as $service)
                            <div class="serv-1-baris">
                                <label class="container">{{ $service['service_name'] }}
                                    <input type="checkbox" value="{{ $service['id'] }}" name="booking_service[]"
                                        class="service-checkbox"
                                        {{ in_array($service['id'], old('booking_service', [])) ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        @endforeach
                        @error('booking_service')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-section-label">
                Detail Services
            </div>
            <hr>

            <div class="form-row">
                <div class="form-column">
                    <label for="booking_haircut" class="form-label">Haircut Style</label>
                    <div class="select-wrapper">
                        <select name="booking_haircut" id="booking_haircut" class="form-input"
                            placeholder="Enter Your Haircut Style">
                            <option value="-1" name="">Choose Haircut</option>
                            @foreach ($haircuts as $haircut)
                                <option value="{{ $haircut['id'] }}" name="booking_haircut"
                                    {{ old('booking_haircut') == $haircut['id'] ? 'selected' : '' }}>
                                    {{ $haircut['haircut_name'] }}
                                </option>
                            @endforeach
                        </select>
                        <span class="dropdown-icon">&#9660;</span>
                    </div>
                    @error('booking_haircut')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="booking_note" class="form-label">Note</label>
                    <input type="text" class="form-input" name="booking_note" placeholder="Enter Your Note"
                        value="{{ old('booking_note') }}">
                    @error('booking_note')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-column">
                    <label for="filter_date" class="form-label">Date</label>
                    <input type="date" class="form-input" name="filter_date" id="filter_date">

                    <table class="table_agenda" id="agenda_table">
                        @foreach ($agendas as $agenda)
                            @if ($agenda->status !== 'Unavailable')
                                <td class="agenda_row" data-date="{{ date('Y-m-d', strtotime($agenda->date)) }}">
                                    <input type="radio" name="agenda_id" id="{{ $agenda->id }}"
                                        value="{{ $agenda->id }}"
                                        {{ old('agenda_id') == $agenda->id ? 'checked' : '' }}>
                                    <label for="{{ $agenda->id }}" class="label_agenda">
                                        <h4>{{ $agenda->hairstylist->hairstylist_name }}</h4>
                                        <p>{{ date('H:i', strtotime($agenda->hour)) }} |
                                            {{ date('d M', strtotime($agenda->date)) }}</p>
                                    </label>
                                </td>
                            @endif
                        @endforeach
                    </table>
                    @error('agenda_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
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
                        placeholder="Enter Your Transaction Method" value="{{ old('booking_payment_method') }}">
                    @error('booking_payment_method')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
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
                @error('booking_payment_photo')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="button-form button-width">
                <button type="submit">SUBMIT</button>
            </div>

        </form>

    </div>



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
