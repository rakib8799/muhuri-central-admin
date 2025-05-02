<template>
    <AuthenticatedLayout :breadcrumbs="props?.breadcrumbs" :pageTitle="props?.pageTitle">

        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer">
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Add Tenant Role</h3>
                </div>
            </div>
            <!--end::Card header-->

            <div class="show">
                <VForm @submit="submit()" class="form">
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!-- Role Name -->
                        <div class="fv-row mb-10">
                            <label class="fs-5 fw-bold form-label mb-2">
                                <span class="required">{{ $t('role.label.roleName') }}</span>
                            </label>
                            <Field type="text" class="form-control form-control-lg form-control-solid" placeholder="Tenant Role Name" name="name"
                                v-model="formData.name" />
                            <ErrorMessage :errorMessage="formData.errors.name" />
                        </div>

                        <!--begin::Permissions-->
                        <div class="fv-row">
                            <label class="fs-5 fw-bold form-label mb-2">{{ $t('role.label.rolePermission') }}</label>
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <tbody class="text-gray-600 fw-semibold">
                                        <tr>
                                            <td class="text-gray-800">{{ $t('role.label.administratorAccess') }}
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Allows a full access to the system">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </td>
                                            <td>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="kt_roles_select_all"/>
                                                    <span class="form-check-label" for="kt_roles_select_all">{{ $t('role.label.selectAll') }}</span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Permissions-->
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

<script lang="ts" setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ErrorMessage from "@/Components/Message/ErrorMessage.vue";
import SubmitButton from "@/Components/Button/SubmitButton.vue";
import { ref, watch, computed } from 'vue';
import { Field, Form as VForm } from "vee-validate";
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    breadcrumbs: Array as () => Breadcrumb[],
    pageTitle: String,
});

interface Breadcrumb {
    url: string;
    title: string;
}

interface Permission {
    id: number;
}

const formData = useForm({
    name: '',
    permission_ids: []
});

const submit = () => {

};
</script>
