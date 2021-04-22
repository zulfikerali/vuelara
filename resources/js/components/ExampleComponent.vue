<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                        <Body></Body>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Body from "./Body";
export default {
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
