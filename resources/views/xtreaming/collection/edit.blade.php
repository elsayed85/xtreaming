@extends('layouts.app')
@section('main')
<div class="layout-section">
    <ol class="breadcrumb d-inline-flex text-muted mb-3">
    <li class="breadcrumb-item"><a href="https://demo.codelug.com/xtreaming/collections">
    Collections</a></li>
    <li class="breadcrumb-item active" aria-current="page">
    The Best TV and Movies to Watch in Jun </li>
    </ol>
    <form method="post" class="collection-form" data-loader="">
    <div class="layout-section">
    <div class="row mb-4">
    <div class="col-auto">
    <a href="https://demo.codelug.com/xtreaming/user/admin" class="d-block" data-bs-tooltip="tooltip" data-bs-placement="top" title="" data-bs-original-title="Xtreaming - @admin">
    <div class="avatar avatar-xl rounded-circle text-white fs-xs" style="background-color:#864bfc;">A</div> </a>
    </div>
    <div class="col-lg text-gray-600">
    <h1 class="h4 fw-semibold mb-1">
    The Best TV and Movies to Watch in Jun </h1>
    <ul class="list-inline list-separator fs-xs text-gray-500">
    <li class="list-inline-item"><a href="https://demo.codelug.com/xtreaming/user/admin" class="text-current fw-semibold">
    admin</a></li>
    <li class="list-inline-item">
    7 post avaible </li>
    <li class="list-inline-item text-heading">
    <a href="https://demo.codelug.com/xtreaming/collection/the-best-tv-and-movies-to-watch-in-jun-3?_ACTION=edit" class="text-current fw-semibold">
    Edit</a>
    </li>
    </ul>
    <div class="my-4">
    <input type="hidden" name="_ACTION" value="save">
    <input type="hidden" name="_TOKEN" value="JDJ5JDEwJHVHdVREMGtLOFpuZVJHV2hlMEVrYWUzVlRuei5WQWhYQkdMbmRGRGlEaU5vbWhNY2U5MzZH">
    <div class="mb-2">
    <label class="form-label">
    Title</label>
    <input type="text" name="name" class="form-control form-control-lg" placeholder="Title" required="true" minlength="3" value="The Best TV and Movies to Watch in Jun">
    </div>
    <div class="mb-2">
    <button type="submit" class="btn btn-theme py-3 w-lg-300">
    Save changes</button>
    </div>
    <div class="form-switch">
    <input class="form-check-input" type="checkbox" id="privacy" name="privacy" value="1">
    <label class="form-check-label ms-2 fs-sm" for="privacy">
    Private</label>
    </div>
    </div>
    </div>
    </div>
    <div class="row g-3">
    <div class="col-lg-4">
    <div class="row">
    <div class="col-lg-auto">
    <div class="w-lg-75px">
    <picture>
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/t0VKzmt2Ed.webp" type="image/webp" class="img-fluid" srcset="https://demo.codelug.com/xtreaming/public/upload/post/t0VKzmt2Ed.webp">
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/t0VKzmt2Ed.png" type="image/png" class="img-fluid rounded-1" srcset="https://demo.codelug.com/xtreaming/public/upload/post/t0VKzmt2Ed.png">
    <img src="https://demo.codelug.com/xtreaming/public/upload/post/t0VKzmt2Ed.png" data-src="https://demo.codelug.com/xtreaming/public/upload/post/t0VKzmt2Ed.png" alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded" width="100" height="auto">
    </picture> </div>
    </div>
    <div class="col-lg">
    <div class="fs-xs text-muted">
    The Black Phone </div>
    <a href="https://demo.codelug.com/xtreaming/movie/the-black-phone" class="fw-semibold text-current fs-base d-inline-block mb-2">
    The Black Phone</a>
    <div class="fs-xs h-2x text-muted">
    Finney Blake, a shy but clever 13-year-old boy, is abducted by a sadistic killer and trapped in a soundproof basement where screaming is of little use. When a disconnected phone on the wall begins to ring, Finney discovers that he can hear the voices of the killer’s previous victims. And they are dead set on making sure that what happened to them doesn’t happen to Finney. </div>
    <div class="form-switch mt-2">
    <input class="form-check-input" type="checkbox" id="c19" name="collection[]" value="19">
    <label class="form-check-label ms-2 fs-sm" for="c19">
    Remove</label>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="row">
    <div class="col-lg-auto">
    <div class="w-lg-75px">
    <picture>
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.webp" type="image/webp" class="img-fluid" srcset="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.webp">
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.png" type="image/png" class="img-fluid rounded-1" srcset="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.png">
    <img src="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.png" data-src="https://demo.codelug.com/xtreaming/public/upload/post/egNy3srNqW.png" alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded" width="100" height="auto">
    </picture> </div>
    </div>
    <div class="col-lg">
    <div class="fs-xs text-muted">
    Peaky Blinders </div>
    <a href="https://demo.codelug.com/xtreaming/serie/peaky-blinders" class="fw-semibold text-current fs-base d-inline-block mb-2">
    Peaky Blinders</a>
    <div class="fs-xs h-2x text-muted">
    A gangster family epic set in 1919 Birmingham, England and centered on a gang who sew razor blades in the peaks of their caps, and their fierce boss Tommy Shelby, who means to move up in the world. </div>
    <div class="form-switch mt-2">
    <input class="form-check-input" type="checkbox" id="c17" name="collection[]" value="17">
    <label class="form-check-label ms-2 fs-sm" for="c17">
    Remove</label>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="row">
    <div class="col-lg-auto">
    <div class="w-lg-75px">
    <picture>
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.webp" type="image/webp" class="img-fluid" srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.webp">
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png" type="image/png" class="img-fluid rounded-1" srcset="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png">
    <img src="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png" data-src="https://demo.codelug.com/xtreaming/public/upload/post/LnwJa8zxE2.png" alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded" width="100" height="auto">
    </picture> </div>
    </div>
    <div class="col-lg">
    <div class="fs-xs text-muted">
    Top Gun: Maverick </div>
    <a href="https://demo.codelug.com/xtreaming/movie/top-gun-maverick" class="fw-semibold text-current fs-base d-inline-block mb-2">
    Top Gun: Maverick</a>
    <div class="fs-xs h-2x text-muted">
    After more than thirty years of service as one of the Navy’s top aviators, and dodging the advancement in rank that would ground him, Pete “Maverick” Mitchell finds himself training a detachment of TOP GUN graduates for a specialized mission the likes of which no living pilot has ever seen. </div>
    <div class="form-switch mt-2">
    <input class="form-check-input" type="checkbox" id="c13" name="collection[]" value="13">
    <label class="form-check-label ms-2 fs-sm" for="c13">
    Remove</label>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="row">
    <div class="col-lg-auto">
    <div class="w-lg-75px">
    <picture>
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.webp" type="image/webp" class="img-fluid" srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.webp">
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png" type="image/png" class="img-fluid rounded-1" srcset="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png">
    <img src="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png" data-src="https://demo.codelug.com/xtreaming/public/upload/post/0wvDyaGmQP.png" alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded" width="100" height="auto">
    </picture> </div>
    </div>
    <div class="col-lg">
    <div class="fs-xs text-muted">
    Black Site </div>
    <a href="https://demo.codelug.com/xtreaming/movie/black-site" class="fw-semibold text-current fs-base d-inline-block mb-2">
    Black Site</a>
    <div class="fs-xs h-2x text-muted">
    A group of officers based in a labyrinthine top-secret prison must fight for their lives against Hatchet, a brilliant and infamous high-value detainee. When he escapes, his mysterious and deadly agenda has far reaching and dire consequences. </div>
    <div class="form-switch mt-2">
    <input class="form-check-input" type="checkbox" id="c11" name="collection[]" value="11">
    <label class="form-check-label ms-2 fs-sm" for="c11">
    Remove</label>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="row">
    <div class="col-lg-auto">
    <div class="w-lg-75px">
    <picture>
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.webp" type="image/webp" class="img-fluid" srcset="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.webp">
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.png" type="image/png" class="img-fluid rounded-1" srcset="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.png">
    <img src="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.png" data-src="https://demo.codelug.com/xtreaming/public/upload/post/HPmGlL3QiY.png" alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded" width="100" height="auto">
    </picture> </div>
    </div>
    <div class="col-lg">
    <div class="fs-xs text-muted">
    A Family Affair </div>
    <a href="https://demo.codelug.com/xtreaming/serie/a-family-affair" class="fw-semibold text-current fs-base d-inline-block mb-2">
    A Family Affair</a>
    <div class="fs-xs h-2x text-muted">
    An inheritance from the late matriarch of the Estrellas intertwines the life of Cherry Red with Dave, Paco, Seb, and Drew. Amid the romance that arose between her and two of the four brothers, Cherry's past unravels and exposes deeply buried secrets. </div>
    <div class="form-switch mt-2">
    <input class="form-check-input" type="checkbox" id="c9" name="collection[]" value="9">
    <label class="form-check-label ms-2 fs-sm" for="c9">
    Remove</label>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="row">
    <div class="col-lg-auto">
    <div class="w-lg-75px">
    <picture>
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.webp" type="image/webp" class="img-fluid" srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.webp">
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png" type="image/png" class="img-fluid rounded-1" srcset="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png">
    <img src="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png" data-src="https://demo.codelug.com/xtreaming/public/upload/post/bEumEOmDYu.png" alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded" width="100" height="auto">
    </picture> </div>
    </div>
    <div class="col-lg">
    <div class="fs-xs text-muted">
    비밀의 집 </div>
    <a href="https://demo.codelug.com/xtreaming/serie/the-secret-house" class="fw-semibold text-current fs-base d-inline-block mb-2">
    The Secret House</a>
    <div class="fs-xs h-2x text-muted">
    A story about quitting being a good boy and chasing evil to the end for the sake of the mother and sister who sacrificed for themselves.
    A revenge play in which a dirt spoon lawyer chasing the traces of his missing mother walks into the secret surrounding him to fight the world. </div>
    <div class="form-switch mt-2">
    <input class="form-check-input" type="checkbox" id="c8" name="collection[]" value="8">
    <label class="form-check-label ms-2 fs-sm" for="c8">
    Remove</label>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-4">
    <div class="row">
    <div class="col-lg-auto">
    <div class="w-lg-75px">
    <picture>
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.webp" type="image/webp" class="img-fluid" srcset="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.webp">
    <source data-srcset="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.png" type="image/png" class="img-fluid rounded-1" srcset="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.png">
    <img src="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.png" data-src="https://demo.codelug.com/xtreaming/public/upload/post/aIRzeHI1nV.png" alt="" class="img-fluid rounded-1 ls-is-cached lazyloaded" width="100" height="auto">
    </picture> </div>
    </div>
    <div class="col-lg">
    <div class="fs-xs text-muted">
    Kolejne 365 dni </div>
    <a href="https://demo.codelug.com/xtreaming/movie/the-next-365-days" class="fw-semibold text-current fs-base d-inline-block mb-2">
    The Next 365 Days</a>
    <div class="fs-xs h-2x text-muted">
    Laura and Massimo's relationship hangs in the balance as they try to overcome trust issues while a tenacious Nacho works to push them apart. </div>
    <div class="form-switch mt-2">
    <input class="form-check-input" type="checkbox" id="c7" name="collection[]" value="7">
    <label class="form-check-label ms-2 fs-sm" for="c7">
    Remove</label>
     </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
@endsection
