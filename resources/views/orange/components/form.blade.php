<div class="loan-form">
    <form>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label>Фамилия</label>
                    <input type="text" class="form-control" placeholder="Full name">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Имя</label>
                    <input type="text" class="form-control" placeholder="State">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" placeholder="Phone">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="banner-form-btn">
                    <button type="submit" class="default-btn">
                        {{ trans(app()->getLocale().'.get_credit') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>