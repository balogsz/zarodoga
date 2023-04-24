
const postData= async (url,configObj,renderFc)=>{
    const response=await fetch(url,configObj)
    const data=await response.json()
    renderFc(data);
}

const verifyuser= async (url,renderFc)=>{
    const response=await fetch(url)
    const data=await response.json()
    renderFc(data);
}

const logoutUser= async (url,renderFc)=>{
    const response=await fetch(url)
    const data=await response.json()
    renderFc(data);
}