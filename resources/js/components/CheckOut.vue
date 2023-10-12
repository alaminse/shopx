<template>
    <div class="container mt-5">
      <div class="heading text-center">
        <h1 class="heading-title">বিলিং এন্ড শিপিং</h1>
        <p class="heading-sub mt-2">
          যেকোনো প্রয়োজনে কল করুন : 00000-0000 অথবা হোয়াট্স আপ করুন :
          01800-000000
        </p>
      </div>
      <div class="row flex-column justify-content-center">
        <div class="col-lg-8 col-md-12 coupon-text m-auto pb-2">
          <p class="mt-4">
            Have a coupon?
            <a href="" class="link-text">Click here to enter your code</a>
          </p>
        </div>

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
              <div class="billing py-3">
                <h3 class="title fw-bold mb-1">BILLING & SHIPPING</h3>
                <p class="description">
                  নিচের ফর্মে আপনার নাম , পূর্ণ ঠিকানা এবং মোবাইল নাম্বার লিখুন !
                  তারপর "<span class="fw-bold color-primary"
                    >Proceed To Shipping</span
                  >" বাটনে ক্লিক করে আপনার অর্ডারটি সফলভাবে সম্পন্ন করুন ।
                </p>
                <!-- Billing form  -->
                <form class="billing-form">
                  <div class="mt-4">
                    <label for="name" class="form-label">আপনার নাম *</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="আপনার নাম লিখুন "
                    />
                  </div>
                  <div class="mt-4">
                    <label for="number" class="form-label"
                      >আপনার মোবাইল নাম্বার *
                    </label>
                    <input
                      type="number"
                      class="form-control"
                      id="number"
                      placeholder="আপনার ১১ ডিজিটের মোবাইল নম্বরটি লিখুন "
                    />
                  </div>
                  <div class="mt-4">
                    <label for="delivery-address" class="form-label"
                      >ডেলিভারি ঠিকানা *</label
                    >
                    <textarea
                      class="form-control"
                      id="delivery-address"
                      rows="2"
                      placeholder="প্রোডাক্ট ডেলিভারি ঠিকানা এখানে লিখুন "
                    ></textarea>
                  </div>
                  <div class="mt-4">
                    <label for="extra-note" class="form-label"
                      >এক্সট্রা নোট *
                      <span class="color-primary-light">(Optional)</span></label
                    >
                    <textarea
                      class="form-control"
                      id="extra-note"
                      rows="2"
                      placeholder="আপনার যদি এক্সট্রা কোনো নোট থাকে , এখানে লিখুন "
                    ></textarea>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="checkout-details rounded">
                <div class="row">
                  <div class="col-lg-10 col-md-9 col-10">
                    <h5 class="title mb-1">YOUR ORDER</h5>
                    <p class="color-primary-light">Enterprise Businesses</p>
                  </div>
                  <div class="col-lg-2 col-md-3 col-2">
                    <div class="rounded-circle order-icon position-relative">
                      <span class="material-symbols-outlined position-absolute top-25"><i class="bi bi-truck color3 text-white py-2 px-3"></i></span>
                    </div>
                  </div>
                </div>
                <!-- shipment-status -->
                <div class="shipment-status d-flex align-items-center mt-2 shadow-sm">
                  <div class="shipment-title p-2 rounded-start">
                    <p>Proceed to Shipping</p>
                  </div>
                  <div class="shipment-status-icon p-2 rounded-end material-symbols-outlined">
                    <i class="bi bi-truck color3 text-white py-2 px-3"></i>
                  </div>
                </div>
                <!-- check out list -->
                <ul class="list-group list-group-flush mt-2">
                  <li
                    class="list-group-item d-flex justify-content-between align-items-start"
                  >
                    <p class="shipment-details-name">Product Name</p>
                    <p class="shipment-details-subtotal">SUBTOTAL</p>
                  </li>
                  <li
                    class="list-group-item d-flex justify-content-between align-items-start"
                  >
                    <p class="shipment-details-name">
                      Fashion Wallets Cowhide Leather Long Wallet
                    </p>
                    <p class="shipment-details-subtotal">2,230</p>
                  </li>
                  <li
                    class="list-group-item d-flex justify-content-between align-items-start"
                  >
                    <p class="shipment-details-name">SUBTOTAL</p>
                    <p class="shipment-details-subtotal">2,230</p>
                  </li>
                  <li
                    class="list-group-item d-flex justify-content-between align-items-start"
                  >
                    <p class="shipment-details-name">SHIPPING</p>
                    <p class="shipment-details-subtotal">FREE SHIPPING</p>
                  </li>
                  <li
                    class="list-group-item d-flex justify-content-between align-items-start"
                  >
                    <p class="shipment-details-name">CASH ON DELIVERY</p>
                    <p class="shipment-details-subtotal">2,230</p>
                  </li>
                </ul>
                <div class="d-flex align-items-center payment-status mt-3">
                  <span class="material-symbols-outlined me-1">check_circle</span>
                  <p>Pay With Cash Upon Delivery.</p>
                </div>
                <p class="order-policy mt-2 color-primary-light">
                  Your personal data will be used to process your order, support
                  your experience throughout this website, and for other purposes
                  described in our <a href="" class="link-text">privacy policy.</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
/* Reusable */
p {
  margin-bottom: 0;
}
a {
  color: var(--color-primary);
}

.color-primary {
  color: var(--color-primary);
}
.color-primary-light {
  color: var(--color-primary-light);
}

.top-25 {
  top: 25%;
}
.start-25 {
  left: 25%;
}

/* header */
.heading {
  font-weight: 600 !important;
  font-size: 30px !important;
}
.heading-title {
  color: var(--color-primary);
  font-weight: 600 !important;
  font-size: 30px !important;
}
.heading-sub {
  color: var(--color-secondary);
  font-weight: 600 !important;
  font-size: 30px !important;
}
.coupon-text {
  font-size: 15px;
  flex-basis: 100%;
}

/* Billing */
.billing {
  border-top: 3px solid var(--color-primary);
}
.billing .title {
  font-size: 16.25px;
}
.billing .description {
  font-size: 15px;
  font-weight: 500;
  color: var(--color-primary-light);
}

.billing-form {
  font-size: 13px !important;
}
.billing-form input,
.billing-form textarea {
  font-size: 13px;
}

/* checkout details */
.checkout-details {
  border: 3px solid var(--color-primary);
  padding: 20px;
}
.checkout-details .title {
  font-size: 16.25px;
}
.order-icon {
  width: 45px;
  height: 45px;
  background: var(--color-secondary);
  color: white;
}

.shipment-status {
  color: white;
  font-size: 18px;
  width: fit-content;
}
.shipment-status .shipment-title {
  background: var(--color-primary);
}
.shipment-status .shipment-status-icon {
  background: var(--color-secondary);
  font-size: 18px;
}

/* list */
.checkout-details ul li {
  padding-left: 0px !important;
  padding-right: 0 !important;
  font-weight: 600;
  border-bottom: 2px solid #ebebeb !important;
}
.checkout-details ul li:last-child{border-bottom: none !important;}
.shipment-details-name {
  max-width: 280px;
}

.payment-status, .payment-status span{
  font-size: 14px;
  font-weight: 600;
}
.order-policy{font-size: 14px;}

/* responsive */

@media (max-width:760px) {
    .heading-title{font-size: 25px !important;}
    .heading-sub{font-size: 20px !important;}
    .checkout-details{margin-top: 60px;}
}
</style>
