<template>
    <AuthenticatedLayout :breadcrumbs="props?.breadcrumbs" :pageTitle="props?.pageTitle">

        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
            <div class="content flex-row-fluid" id="kt_content">
                <!--begin::Add new Role-->
                <div class="d-flex justify-content-end mb-3" data-kt-customer-table-toolbar="base" v-if="checkPermission('can-create-tenant-role')">
                    <Link :href="route('tenant-roles.create')" class="btn btn-primary">
                        <KTIcon icon-name="plus" icon-class="fs-2" />
                            Add Tenant Role
                    </Link>
                </div>
                <!--end::Add new Role-->

                <!--begin::Row-->
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <div class="card card-flush h-md-100">
                        <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    Role Name
                                </div>
                                <!-- change status -->

                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->

                            <!--end::Card body-->

                            <!--begin::Card footer-->

                            <!--end::Card footer-->
                        </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup lang="ts">
import ChangeStatusButton from '@/Components/Button/ChangeStatusButton.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/vue3';
import KTIcon from "@/Core/helpers/kt-icon/KTIcon.vue";
import DeleteConfirmationButton from '@/Components/Button/DeleteConfirmationButton.vue';
import { checkPermission } from "@/Core/helpers/Permission";

const props = defineProps({
    breadcrumbs: Array as() => Breadcrumb[],
    pageTitle: String,
});

interface Breadcrumb {
    url: string;
    title: string;
}
</script>
