let  program=document.querySelector("#program");
 console.log(program)
 
let applyDate=document.getElementById("applyDate")
console.log(applyDate)
let attend=document.getElementById("attendance")
console.log(attend)
let sname=document.getElementById("name")
console.log(sname)
console.log(sname.value)
let roll=document.getElementById("roll")
console.log(roll)
let sec=document.querySelector("attendance")
console.log(sec)
let fdate=document.getElementById("fdate")
console.log(fdate)
let ftime=document.getElementById("ftime")
console.log(ftime)
let tdate=document.getElementById("ttime")
console.log(tdate)
let ttime=document.getElementById("ttime")
console.log(ttime)
let days=document.getElementById("days")
console.log(days)
let outof=document.querySelector("attendance")
console.log(outof)
let per=document.querySelector("permin")
console.log(per)
let sphone=document.getElementById("sphone")
console.log(sphone)
let email=document.getElementById("attendance")
console.log(email)
let hname=document.getElementById("attendance")
console.log(hname)
let reason=document.querySelector("text")
console.log(reason)
let cname=document.getElementById("cname")
console.log(cname)
let address=document.getElementById("address")
console.log(address)
let btn=document.getElementById("btn")

let p_approval=document.getElementById("p-approval")
console.log(p_approval)
let c_approval=document.getElementById("c-approval")
console.log(c_approval)
let h_approval=document.getElementById("h-approval")
console.log(h_approval)




function calDays() {

    const startDateString = document.getElementById('fdate').value;
    const endDateString = document.getElementById('tdate').value;

    const startDate = new Date(startDateString);
    console.log(startDate)
    const endDate = new Date(endDateString);

    if (isNaN(startDate.getTime()) || isNaN(endDate.getTime())) {
      document.getElementById('days').textContent = 'Invalid date format';
      return;
    }

    const differenceInMs = endDate.getTime() - startDate.getTime();
   console.log(differenceInMs)
   
    const daysDifference = differenceInMs / (1000 * 60 * 60 * 24);
    console.log(daysDifference)

    document.getElementById('days').value =  Math.abs(daysDifference);
    console.log( Math.abs(daysDifference))
  }





