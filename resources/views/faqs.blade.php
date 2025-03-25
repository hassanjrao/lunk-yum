@extends('layouts.front')

@section('page-name', 'FAQs')

@section('styles')
<style>
    h3{
        font-family:sans-serif
    }
</style>
@endsection

@section('content')
    <section class="contact section">
        <div class="container section-title aos-init aos-animate" data-aos="fade-up" style="padding-bottom: 0px">
            <p><span></span> <span class="description-title">FAQs
                </span></p>
        </div>
        <br>
        <div class="container mt-5">
            <h1 class="mb-4">Frequently Asked Questions</h1>

            <h3>1. How does the lunch delivery service work?</h3>
            <p>We provide freshly prepared, nutritious meals delivered directly to your child's school. Parents can pre-order meals through our website and select weekly or monthly subscription.</p>

            <h3>2. What types of meals do you offer?</h3>
            <p>Our menu includes a variety of balanced and kid-friendly meals. Each meal is designed to be delicious and nutritious, keeping students energized throughout the day.</p>

            <h3>3. Can I customize my child’s meal?</h3>
            <p>Unfortunately, no! We offer standardized menus that are applicable to both weekly and monthly subscription plans.</p>

            <h3>4. How do I place an order?</h3>
            <p>Ordering is easy!</p>
            <ul>
                <li>Visit our website</li>
                <li>Select your child’s school & grade</li>
                <li>Choose the weekly or monthly (recommended) subscription</li>
                <li>Complete the payment, and we’ll handle the rest!</li>
            </ul>

            <h3>5. What is the cut-off time for placing orders?</h3>
            <p>Our service begins every following Monday of the date order is placed. As such, orders must be placed by Thursday 12 noon of the week before.</p>

            <h3>6. What is your cancellation policy?</h3>
            <p><strong>Weekly Subscription</strong></p>
            <ul>
                <li>Weekly subscriptions may only be canceled if the request is made by Thursday at 12:00 PM of the previous week.</li>
                <li>Cancellation requests received after Thursday at 12:00 PM will apply to the following week's subscription, and no refunds will be issued for the current or upcoming week.</li>
            </ul>
            <p><strong>Monthly Subscription</strong></p>
            <ul>
                <li>Monthly subscriptions may be canceled at any time; however, refunds will only be issued for the remaining weeks after Thursday at 12:00 PM of the current week.</li>
                <li>Cancellation requests received before Thursday at 12:00 PM will take effect starting the following week, with a refund provided for any remaining weeks in the subscription.</li>
                <li>No refunds will be issued for the current week, even if meals are not received.</li>
            </ul>
            <p><strong>How to Cancel:</strong> To request a cancellation, please contact us via email, phone, or online portal.</p>

            <h3>7. How do you ensure food safety and quality?</h3>
            <p>We prioritize food safety and quality by preparing all meals in a clean and hygienic environment. Our kitchen follows strict sanitation protocols to ensure the highest standards of food handling.</p>

            <h3>8. What if my child has food allergies?</h3>
            <p>Unfortunately, we are not able to accommodate food allergies at this time. Our kitchen handles a variety of ingredients, and cross-contamination is likely.</p>

            <h3>9. How much does the lunch service cost?</h3>
            <p>You can view pricing details when placing an order.</p>

            <h3>10. Do you offer discounts for bulk orders or siblings?</h3>
            <p>Yes! We provide discounts for multiple children from the same family and monthly subscriptions.</p>

            <h3>11. What payment methods do you accept?</h3>
            <p>We accept bank transfers at the moment and are working toward adding credit cards, Easypaisa, and Jazz Cash.</p>

            <h3>12. What happens if my child is absent on a delivery day?</h3>
            <p>If your child is absent, you can reschedule the meal for another day or transfer it to a sibling or friend at the same school. Please notify us by 12 PM the day before for adjustments.</p>

            <h3>13. Do you deliver to all schools?</h3>
            <p>We currently deliver to select schools in Karachi as shown in the drop-down list on the order form. If your school is not listed, please contact us, and we’ll see if we can accommodate your request!</p>

            <h3>14. How can I contact customer support?</h3>
            <p>You can reach us via:</p>
            <ul>
                <li><strong>Email:</strong> sales@Yum4Kids.pk</li>
                <li><strong>Phone:</strong> 0330 3038184</li>
            </ul>
        </div>
    </section>
@endsection
