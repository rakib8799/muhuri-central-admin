<template>
    <AuthenticatedLayout :breadcrumbs="props?.breadcrumbs" :pageTitle="props?.pageTitle">

        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer">
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Add Tenant Permission</h3>
                </div>
            </div>
            <!--end::Card header-->

            <div class="show">
                <VForm @submit="submit()" class="form">
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!-- Name -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="required fs-5 fw-semibold mb-2">{{ $t('permission.label.name') }}</label>
                            <Field type="text" class="form-control form-control-lg form-control-solid" :placeholder="$t('permission.placeholder.name')" name="name" v-model="formData.name"/>
                            <ErrorMessage :errorMessage="formData.errors.name" />
                        </div>

                        <!-- Group Name -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="required fs-5 fw-semibold mb-2">{{ $t('permission.label.groupName') }}</label>
                            <Multiselect
                                :placeholder="$t('permission.placeholder.groupName')"
                                v-model="formData.group_name"
                                :searchable="true"
                                :taggable="true"
                                :create-option="true"
                                label="name"
                                track-by="value"
                                />
                            <ErrorMessage :errorMessage="formData.errors.group_name" />
                        </div>

                        <!-- Display Name -->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <label class="required fs-5 fw-semibold mb-2">{{ $t('permission.label.displayName') }}</label>
                            <Field type="text" class="form-control form-control-lg form-control-solid" :placeholder="$t('permission.placeholder.displayName')" name="display_name" v-model="formData.display_name"/>
                            <ErrorMessage :errorMessage="formData.errors.display_name" />
                        </div>
                    </div>
                    <!--end::Card body-->

                    <!-- Submit Button-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <SubmitButton />
                    </div>
                </VForm>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import { useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Field, Form as VForm } from "vee-validate";
import ErrorMessage from "@/Components/Message/ErrorMessage.vue";
import SubmitButton from "@/Components/Button/SubmitButton.vue";
import Multiselect from '@vueform/multiselect';
import { ref } from 'vue';

const props = defineProps({
    breadcrumbs: Array as() => Breadcrumb[],
    pageTitle: String,
});

interface Breadcrumb {
    url: string;
    title: string;
}

const formData = useForm({
    name: '',
    group_name: '',
    display_name: '',
});

const submit = () => {

};
</script>
