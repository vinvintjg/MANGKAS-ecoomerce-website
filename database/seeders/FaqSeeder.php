<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::create([
            'id' => 1,
            'faq_question' => 'How to do the booking process?',
            'faq_answer' => 'To initiate the booking process, simply select the desired product or service, choose your preferred date and time, and proceed to the checkout page to provide your necessary details and payment information. Once the booking is confirmed, you will receive a confirmation email with all the relevant details.'
        ]);
        Faq::create([
            'id' => 2,
            'faq_question' => 'How do I make a schedule change on an order?',
            'faq_answer' => 'If you wish to make a schedule change on an existing order, please log in to your account and navigate to the "My Orders" section. Select the order you want to modify and click on the "Reschedule" option. Choose a new date and time that suits you, and the system will update your order accordingly, sending you a confirmation for the revised schedule.'
        ]);
        Faq::create([
            'id' => 3,
            'faq_question' => 'What is the process for refunding funds if I cancel a booking?',
            'faq_answer' => 'Should you decide to cancel a booking, the refund process will be initiated according to our cancellation policy. Usually, refunds are issued back to the original payment method within a certain period after the cancellation request. Please refer to our refund policy or contact our customer support for more detailed information.'
        ]);
        Faq::create([
            'id' => 4,
            'faq_question' => 'How do I place an order for the product?',
            'faq_answer' => 'Placing an order for a product is a straightforward process. Browse through our catalog, find the desired item, and click on the "Add to Cart" button. Once you have finished shopping, proceed to the checkout page, fill in the required details, and make the payment. Your order will be confirmed, and you will receive an order confirmation email shortly.'
        ]);
        Faq::create([
            'id' => 5,
            'faq_question' => 'How do you register to become a pruning partner?',
            'faq_answer' => 'To become a pruning partner, register on our website by filling out the provided form with your relevant details and business information. Our team will review your application, and if you meet our partnership criteria, you will be notified via email about the status of your registration.'
        ]);
        Faq::create([
            'id' => 6,
            'faq_question' => 'How do you register to become a pruning partner?',
            'faq_answer' => 'The requirements for registering as a pruning partner include having a valid business license, relevant experience and expertise in pruning services, the ability to adhere to our quality standards, and a commitment to delivering excellent customer service. Additionally, you should have the necessary equipment and resources to fulfill pruning orders efficiently.'
        ]);

    }
}
