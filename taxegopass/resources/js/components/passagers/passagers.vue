<template>
  <div class="main-content">
    <div class="page-content">
     
        <div class="chat-wrapper d-lg-flex gap-3 gap-lg-4 p-xl-1 pt-md-5 p-lg-1">
          <div class="todo-content w-100 pb-0">
            <div class="row mb-4">
              <div class="col-auto order-1 d-block d-lg-none">
                <button type="button" class="btn btn-subtle-success btn-icon file-menu-btn">
                  <i class="ri-menu-2-fill align-bottom"></i>
                </button>
              </div>
              <div class="col-sm order-3 order-sm-2 mt-3 mt-sm-0">
                <h5 class="fw-semibold mb-2">
                  Admin RVA
                  <span class="badge bg-primary align-bottom ms-2">v1.0.0</span>
                </h5>
                <p class="text-decoration-underline d-inline-block mb-0 text-muted">
                  <a href="#!" class="text-reset">Passager List </a>
                </p>
              </div>
              <div class="col-auto order-2 order-sm-3 ms-auto">
                <div class="hstack gap-2">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn btn-icon fw-semibold btn-secondary">
                      <i class="ti ti-arrow-back-up"></i>
                    </button>
                    <button class="btn btn-icon fw-semibold btn-success">
                      <i class="ti ti-arrow-forward-up"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-3 bg-light rounded mb-4">
              <div class="row g-2">
                <div class="col-lg-auto card">
                  <a class="form-control" data-choices data-choices-search-false @click="printallpassager"
                    name="choices-select-status" id="choices-select-status">
                    <i class="ph-printer-fill"></i></a>
                </div>

                <div class="col-lg-auto">
                  <select class="form-control" data-choices data-choices-search-false name="choices-select-sortlist"
                    id="choices-select-sortlist">
                    <option value="">Sort</option>
                    <option value="By ID">By ID</option>
                    <option value="By Name">By Name</option>
                  </select>
                </div>
                <div class="col-lg mb-4" >
                  <div class="search-box">
                    <input type="text" id="searchTaskList" class="form-control search" placeholder="Search task name" />
                    <i class="ri-search-line search-icon"></i>
                  </div>
                </div>
                <div class="col-lg-auto">
                  <button class="btn btn-primary createTask" type="button" data-bs-toggle="modal"
                    data-bs-target="#Addagent">
                    <i class="ri-add-fill align-bottom"></i> Add Passager
                  </button>

                  <!-- removeFileItemModal -->
                  <div id="Addagent" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-removetodomodal"></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div id="text-form" class="col-md-12 2">
                              <h3>Add Agent</h3>
                              <div class="form-group">
                                <label class="control-label">Noms</label>
                                <input type="text" v-model="model.modelPassager.nomspass" required class="form-control" />
                              </div>
                              <div class="form-group">
                                <label for="cpn_id" class="control-label">Genre</label>
                                <select id="" name="sexe" required v-model="model.modelPassager.genrepass"
                                  class="form-control">
                                  <option value="Masculin">Masculin</option>
                                  <option value="Feminin">Feminin</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Date de naissance</label>
                                <input type="date" v-model="model.modelPassager.datenaisspass" required
                                  class="form-control" />
                              </div>
                              <div class="form-group">
                                <label class="control-label">Telephone</label>
                                <input type="text" v-model="model.modelPassager.telephone" class="form-control" />
                              </div>
                              <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="mail" v-model="model.modelPassager.emailpass" class="form-control" />
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label">Adresse</label>
                                <input type="mail" v-model="model.modelPassager.adresse" class="form-control" />
                              </div>
                              <div class="form-group">
                                <label for="cpn_id" class="control-label">Vol</label>
                                <select id="cpn_id" name="vols" v-model="model.modelPassager.ref_vol"
                                  class="form-control">
                                  <option v-for="(itemvol, index) in this.vols" :key="index" :value="itemvol.id">
                                    {{ itemvol.designation }}</option>
                                </select>
                              </div>
                              <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn w-sm btn-danger" @click="savepassager"
                                  id="remove-todoitem">
                                  Save
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!--end delete modal -->
                  </div>
                </div>
              </div>
            </div>

            <div class="todo-content position-relative px-4 mx-n4" id="todo-content">
              <div id="elmLoader">
                <div class="text-primary avatar-sm" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
              </div>
              <div class="todo-task" id="todo-task">
                <div class="">
                  <table class="table align-middle position-relative table-nowrap">
                    <thead class="table-active">
                      <tr>
                        <th scope="col" class="sort cursor-pointer" data-sort="invoice_id">
                          ID
                        </th>
                        <th scope="col" class="sort cursor-pointer" data-sort="customer_name">
                          Nom
                        </th>
                        <th scope="col" class="sort cursor-pointer" data-sort="email">
                          Genre
                        </th>
                        <th scope="col" class="sort cursor-pointer" data-sort="create_date">
                          Date de naissance
                        </th>
                        <th scope="col" class="sort cursor-pointer" data-sort="due_date">
                          Telephone
                        </th>
                        <th scope="col" class="sort cursor-pointer" data-sort="amount">
                          Email
                        </th>
                        <th scope="col" class="sort cursor-pointer" data-sort="status">
                          Adresse
                        </th>
                        <th scope="col" class="sort cursor-pointer" data-sort="status">
                          Vol
                        </th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                    <tbody v-if="this.passagers.length > 0">
                      <tr v-for="(passager, index) in this.passagers" :key="index">
                        <td>{{ passager.id }}</td>
                        <td>{{ passager.nomspass }}</td>
                        <td>{{ passager.genrepass }}</td>
                        <td>{{ format_date(passager.datenaisspass) }}</td>
                        <td>{{ passager.telephone }}</td>
                        <td>{{ passager.emailpass }}</td>
                        <td>{{ passager.adresse }}</td>
                        <td>{{ passager.vol.designation }}</td>

                        <td>
                          <button class="btn btn-subtle btn-icon btn-sm remove-item-btn" data-bs-target="#updateagent"
                          @click="getonepassager(passager.id)"   data-bs-toggle="modal">
                            <i class="ph-pencil"></i></button>
                          <!-- removeFileItemModal -->
                          <div id="updateagent" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-removetodomodal"></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div id="text-form" class="col-md-12 2">
                              <h3>Add Agent</h3>
                              <div class="form-group">
                                <label class="control-label">Noms</label>
                                <input type="text" v-model="model.modelPassager.nomspass"  class="form-control" />
                              </div>
                              <div class="form-group">
                                <label for="cpn_id" class="control-label">Genre</label>
                                <select id="" name="sexe" required v-model="model.modelPassager.genrepass"
                                  class="form-control">
                                  <option value="Masculin">Masculin</option>
                                  <option value="Feminin">Feminin</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Date de naissance</label>
                                <input type="date" v-model="model.modelPassager.datenaisspass" 
                                  class="form-control" />
                              </div>
                              <div class="form-group">
                                <label class="control-label">Telephone</label>
                                <input type="text" v-model="model.modelPassager.telephone" class="form-control" />
                              </div>
                              <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="mail" v-model="model.modelPassager.emailpass" class="form-control" />
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label">Adresse</label>
                                <input type="mail" v-model="model.modelPassager.adresse" class="form-control" />
                              </div>
                              <div class="form-group">
                                <label for="cpn_id" class="control-label">Vol</label>
                                <select id="cpn_id" name="vols" v-model="model.modelPassager.ref_vol"
                                  class="form-control">
                                  <option v-for="(itemvol, index) in this.vols" :key="index" :value="itemvol.id">
                                    {{ itemvol.designation }}</option>
                                </select>
                              </div>
                              <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="button" class="btn w-sm btn-danger" @click="update"
                                  id="remove-todoitem">
                                  Update
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!--end delete modal -->
                  </div>
                          <a class="btn btn-subtle btn-icon btn-sm remove-item-btn" data-bs-target="#removeTaskItemModal"
                            data-bs-toggle="modal">
                            <i class="ph-trash"></i></a>
                          <!-- removeFileItemModal -->
                          <div id="removeTaskItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="close-removetodomodal"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="mt-2 text-center">
                                    <i class="ti ti-trash fs-1 text-danger"></i>
                                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                      <h5>Are you sure ?</h5>
                                      <p class="text-muted mx-4 mb-0">
                                        Are you sure you want to remove this
                                        task ?
                                      </p>
                                    </div>
                                  </div>
                                  <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">
                                      Close
                                    </button>
                                    <button type="button" class="btn w-sm btn-danger" id="remove-todoitem">
                                      Yes, Delete It!
                                    </button>
                                  </div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            <!--end delete modal -->
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="" id="" style="display: none;">
                <i class="ti ti-search fs-2 text-success"></i>
                <h6 class="mt-3">Sorry! No Result Found</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- container-fluid -->
    </div>
 
  <!-- End Page-content -->
</template>

<script lang="ts">
import { createToaster } from "@meforma/vue-toaster";
import axios from "axios";
import moment from 'moment';

const toaster = createToaster({
  /* options */
});
export default {
  name: "agents",
  names: "agentcreate",
  setup() { },
  data() {
    return {
      passagers: [],
      adresses: [],
      vols: [],
      model: {
        modelPassager: {
          id: "",
          nomspass: "",
          genrepass: "",
          datenaisspass: "",
          telephone: "",
          emailpass: "",
          adresse: "",
          ref_vol: "",
         
        },
      },
    };
  },
  mounted() {
    //console.log ('helo guys')
    this.getpassagers(); 
    this.getadresses();
    this.getvols();
    //this.agentId(this.$route.params.id);
  },
  methods: {
    format_date(datepaiement) {
      if (datepaiement) {
        return moment(String(datepaiement)).format('DD-MM-YYYY')
      }
    },
    //Shoawing all agent in table
    getpassagers() {
      axios
        .get("http://127.0.0.1:8000/api/v1/passager/passager")
        .then((res) => {
          this.passagers = res.data.data;
          // console.log(this.agents);
        });
    },
    getvols() {
      axios.get("http://127.0.0.1:8000/api/v1/vol/vol").then((res) => {
        this.vols = res.data.data;
        console.log(this.vols);
      });
    },
    getadresses() {
      axios
        .get("http://127.0.0.1:8000/api/v1/passager/adresse")
        .then((res) => {
          this.adresses = res.data.data;
          console.log(this.adresses);
        });
    },

    printallpassager() {
      window.open(`http://127.0.0.1:8000/api/v1/passager/pdf_allpassager`);
    },
    //Ading agent in data base
    savepassager() {
      axios
        .post(
          "http://127.0.0.1:8000/api/v1/passager/passager",
          this.model.modelPassager
        )
        .then((res) => {
          console.log(res.data);
          //alert(res.data.message);
          toaster.success("félicitations");
          this.model.modelPassager = {
            nomspass: "",
            genrepass: "",
            datenaisspass: "",
            telephone: "",
            emailpass: "",
            adresse: "",
            ref_vol: "",  
        };
    })
        .catch(function (error) {         
          if (error.response) {          
            if (error.response.status == 422) {
              toaster.error(error.message);
            }
            
            // console.log(error.response.data);
            //console.log(error.response.status);
            // console.log(error.response.header);
          } else if (error.response) {
           toaster.error("erreur",error.request);
            console.log(error.request);
          } else {
            //toaster.error("erreur",error.request);
          }
      });
  },
  async getonepassager(idpassager) {
      await axios
        .get(`http://127.0.0.1:8000/api/v1/passager/passager/${idpassager}`)
        .then((response) => {
          const { id, nomspass, genrepass,datenaisspass,telephone,emailpass,adresse } = response.data;
          this.model.modelPassager.id = id;
          this.model.modelPassager.nomspass = nomspass;
          this.model.modelPassager.genrepass = genrepass;
          this.model.modelPassager.datenaisspass = datenaisspass;
          this.model.modelPassager.telephone =telephone;
          this.model.modelPassager.adresse =adresse;
          this.model.modelPassager.emailpass =emailpass;
          this.model.modelPassager.ref_vol =response.data.designation;
          console.warn(response.data);
         
        })
        .catch((error) => {
          console.log(error);
        });
    },
    update(idpassager) {
      axios
        .put(`http://127.0.0.1:8000/api/v1/passager/passager/${this.model.modelPassager.id}`,
          {
            nomspass: this.model.modelPassager.nomspass,
            genrepass: this.model.modelPassager.genrepass,
            datenaisspass: this.model.modelPassager.datenaisspass,
            telephone: this.model.modelPassager.telephone,
            emailpass: this.model.modelPassager.emailpass,
            adresse: this.model.modelPassager.adresse,
            ref_vol: this.model.modelPassager.ref_vol,
          })
        .then((response) => {
          console.log("data updated successfully" + response);
          this.getpassagers();
          toaster.success("success");
        })
        .catch((error) => {
          console.log(error);
        });
    },

    /*
     *
     *DELETEING AGENT FROM ID
     *
     */
    /**
     *
     * @param {string} id
     */
    deletepassager(id) {
      if (confirm("Are you sure to delete this passager ?")) {
        axios
          .delete(`http://127.0.0.1:8000/api/v1/passager/passager/${id}`)
          .then((response) => {
            this.getpassagers();
            toaster.success(statusbar)
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },   
  },
};
</script>
