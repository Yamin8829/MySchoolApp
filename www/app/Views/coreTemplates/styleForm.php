<style>
    @font-face {
    font-family:'Poppins';
    font-style:normal;
    font-weight:400;
    font-display:swap;
    src: url( "<?=base_url('public');?>/assets/adminLTE/plugins/fontawesome-free/webfonts/Poppins-Regular.woff") format("woff"),url("/www/assets/adminLTE/plugins/fontawesome-free/webfonts/Poppins-Regular.ttf") format("truetype");
  }


.form-floating {
  position: relative;
}
.form-floating input{
  display: block;
}
.form-floating > .form-control,
.form-floating > .form-select {
  height: calc(3.5rem + 2px);
  line-height: 1.25;
}
.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  padding: 1rem 0.75rem;
  pointer-events: none;
  border: 1px solid transparent;
  transform-origin: 0 0;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-floating > label {
    transition: none;
  }
}
.form-floating > .form-control {
  padding: 1rem 0.75rem;
}
.form-floating > .form-control::-moz-placeholder {
  color: transparent;
}
.form-floating > .form-control::placeholder {
  color: transparent;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}
.form-floating > .form-control:not(:-moz-placeholder-shown) ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-select ~ label {
  opacity: 0.65;
  z-index: 9;
  transform: scale(0.85) translateY(-1.9rem) translateX(0.15rem);
}
.form-floating > .form-control:-webkit-autofill ~ label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}
  </style>

<style>
  .my-input-group {
  position: relative;
  margin: 40px 0 20px;
}

.my-input-group input, .my-input-group select {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

input:focus {
  outline: none;
}
input:focus:required:matches(.p1, .p2)  {
  color: red;
  border-color: red;
  cursor: pointer;
}
label {
  color: #999;
  font-size: 18px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  left: 5px;
  top: -12px;
  background-color: white;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}

input:focus ~ label,
input:valid ~ label, select:valid ~ label {
  top: -20px;
  font-size: 13px;
  left: 5px;
  color: #4285f4;
}

input:required:valid,
select:required:valid {
  border-color: green;
  background: url("https://assets.digitalocean.com/labs/icons/hand-thumbs-up.svg") no-repeat 95% 50% lightgreen;
}
input:required:focus:valid {
  background: url("https://assets.digitalocean.com/labs/icons/hand-thumbs-up.svg") no-repeat 95% 50% lightgreen;
  background-size: 25px;
}
input:focus:invalid {
  background: url("https://assets.digitalocean.com/labs/icons/exclamation-triangle-fill.svg") no-repeat 95% 50% lightsalmon;
  background-size: 25px;
}


.bar {
  position: relative;
  display:block;
  width:100%;
}

.bar:before,
.bar:after {
  content: '';
  height: 2px;
  width: 0;
  bottom: 1px;
  position: absolute;
  background: #4285f4;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}

.bar:before {
  left: 50%;
}

.bar:after {
  right: 50%;
}

input:focus ~ .bar:before,
input:focus ~ .bar:after,
select:focus ~ .bar:before,
select:focus ~ .bar:after {
  width: 50%;
}

.highlight {
  position: absolute;
  height: 60%;
  width: 100px;
  top: 25%;
  left: 0;
  pointer-events: none;
  opacity: 0.5;
}

input:focus ~ .highlight,
select:focus ~ .highlight{
  -webkit-animation: inputHighlighter 0.3s ease;
  -moz-animation: inputHighlighter 0.3s ease;
  animation: inputHighlighter 0.3s ease;
}

/* animations */
@-webkit-keyframes inputHighlighter {
  from { background: #4285f4; }
  to   { width: 0; background: transparent; }
}
@-moz-keyframes inputHighlighter {
  from { background: #4285f4; }
  to   { width: 0; background: transparent; }
}
@keyframes inputHighlighter {
  from { background: #4285f4; }
  to   { width: 0; background: transparent; }
}
</style>