@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
</div>
@endif
<form action="insertProduct" method="post" enctype="multipart/form-data">
    <div  class="mb-3">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    </div>
    <div>
        <div class="mb-3">
            <label for="" class="form-label">ID Product</label>
            <input
                type="text"
                class="form-control"
                name="id"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Product Name</label>
            <input
                type="text"
                class="form-control"
                name="pname"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Company</label>
            <input
                type="text"
                class="form-control"
                name="company"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Select Band</label> <br>
            <select
                class="form-select form-select-lg"
                name="selectBand"
                id=""
            >
                <option selected>Select one</option>
                <option value="Mamonde Total">Mamonde Total</option>
            <option value="Stool Softener">Stool Softener</option>
            <option value="Ranitidine">Ranitidine</option>
            <option value="Systane">Systane</option>
            <option value="Tussin DM">Tussin DM</option>
            </select>
        </div>  

        <div class="mb-3">
            <label for="" class="form-label">Select Year</label> <br>
            <select
                class="form-select form-select-lg"
                name="selectYear"
                id=""
            >
                <option selected>Select one</option>
                <?php
                    for ($year = 2015; $year <= 2030; $year++) {
                        echo '<option value="' . $year . '">' . $year . '</option>';
                    }
                ?>
            </select>
        </div>  
        

        <div class="mb-3">
            <label for="" class="form-label">Choose Image</label>
            <input
                type="file"
                class="form-control"
                name="imageFile"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
        
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info" name="btInsert">Insert</button>
    </div>
</form>