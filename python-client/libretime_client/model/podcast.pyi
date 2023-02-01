# coding: utf-8

"""
    LibreTime API

    Radio Broadcast & Automation Platform  # noqa: E501

    The version of the OpenAPI document: 2.0.0
    Generated by: https://openapi-generator.tech
"""

from datetime import date, datetime  # noqa: F401
import decimal  # noqa: F401
import functools  # noqa: F401
import io  # noqa: F401
import re  # noqa: F401
import typing  # noqa: F401
import typing_extensions  # noqa: F401
import uuid  # noqa: F401

import frozendict  # noqa: F401

from libretime_client import schemas  # noqa: F401


class Podcast(
    schemas.DictSchema
):
    """NOTE: This class is auto generated by OpenAPI Generator.
    Ref: https://openapi-generator.tech

    Do not edit the class manually.
    """


    class MetaOapg:
        required = {
            "id",
            "title",
            "url",
        }
        
        class properties:
            id = schemas.IntSchema
            
            
            class url(
                schemas.StrSchema
            ):
                pass
            
            
            class title(
                schemas.StrSchema
            ):
                pass
            
            
            class creator(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'creator':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class description(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'description':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class language(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'language':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class copyright(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'copyright':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class link(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'link':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class itunes_author(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'itunes_author':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class itunes_keywords(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'itunes_keywords':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class itunes_summary(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'itunes_summary':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class itunes_subtitle(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'itunes_subtitle':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class itunes_category(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'itunes_category':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class itunes_explicit(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'itunes_explicit':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class owner(
                schemas.IntBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneDecimalMixin
            ):
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, decimal.Decimal, int, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'owner':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            __annotations__ = {
                "id": id,
                "url": url,
                "title": title,
                "creator": creator,
                "description": description,
                "language": language,
                "copyright": copyright,
                "link": link,
                "itunes_author": itunes_author,
                "itunes_keywords": itunes_keywords,
                "itunes_summary": itunes_summary,
                "itunes_subtitle": itunes_subtitle,
                "itunes_category": itunes_category,
                "itunes_explicit": itunes_explicit,
                "owner": owner,
            }
    
    id: MetaOapg.properties.id
    title: MetaOapg.properties.title
    url: MetaOapg.properties.url
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["id"]) -> MetaOapg.properties.id: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["url"]) -> MetaOapg.properties.url: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["title"]) -> MetaOapg.properties.title: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["creator"]) -> MetaOapg.properties.creator: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["description"]) -> MetaOapg.properties.description: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["language"]) -> MetaOapg.properties.language: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["copyright"]) -> MetaOapg.properties.copyright: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["link"]) -> MetaOapg.properties.link: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["itunes_author"]) -> MetaOapg.properties.itunes_author: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["itunes_keywords"]) -> MetaOapg.properties.itunes_keywords: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["itunes_summary"]) -> MetaOapg.properties.itunes_summary: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["itunes_subtitle"]) -> MetaOapg.properties.itunes_subtitle: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["itunes_category"]) -> MetaOapg.properties.itunes_category: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["itunes_explicit"]) -> MetaOapg.properties.itunes_explicit: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["owner"]) -> MetaOapg.properties.owner: ...
    
    @typing.overload
    def __getitem__(self, name: str) -> schemas.UnsetAnyTypeSchema: ...
    
    def __getitem__(self, name: typing.Union[typing_extensions.Literal["id", "url", "title", "creator", "description", "language", "copyright", "link", "itunes_author", "itunes_keywords", "itunes_summary", "itunes_subtitle", "itunes_category", "itunes_explicit", "owner", ], str]):
        # dict_instance[name] accessor
        return super().__getitem__(name)
    
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["id"]) -> MetaOapg.properties.id: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["url"]) -> MetaOapg.properties.url: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["title"]) -> MetaOapg.properties.title: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["creator"]) -> typing.Union[MetaOapg.properties.creator, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["description"]) -> typing.Union[MetaOapg.properties.description, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["language"]) -> typing.Union[MetaOapg.properties.language, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["copyright"]) -> typing.Union[MetaOapg.properties.copyright, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["link"]) -> typing.Union[MetaOapg.properties.link, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["itunes_author"]) -> typing.Union[MetaOapg.properties.itunes_author, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["itunes_keywords"]) -> typing.Union[MetaOapg.properties.itunes_keywords, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["itunes_summary"]) -> typing.Union[MetaOapg.properties.itunes_summary, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["itunes_subtitle"]) -> typing.Union[MetaOapg.properties.itunes_subtitle, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["itunes_category"]) -> typing.Union[MetaOapg.properties.itunes_category, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["itunes_explicit"]) -> typing.Union[MetaOapg.properties.itunes_explicit, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["owner"]) -> typing.Union[MetaOapg.properties.owner, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: str) -> typing.Union[schemas.UnsetAnyTypeSchema, schemas.Unset]: ...
    
    def get_item_oapg(self, name: typing.Union[typing_extensions.Literal["id", "url", "title", "creator", "description", "language", "copyright", "link", "itunes_author", "itunes_keywords", "itunes_summary", "itunes_subtitle", "itunes_category", "itunes_explicit", "owner", ], str]):
        return super().get_item_oapg(name)
    

    def __new__(
        cls,
        *_args: typing.Union[dict, frozendict.frozendict, ],
        id: typing.Union[MetaOapg.properties.id, decimal.Decimal, int, ],
        title: typing.Union[MetaOapg.properties.title, str, ],
        url: typing.Union[MetaOapg.properties.url, str, ],
        creator: typing.Union[MetaOapg.properties.creator, None, str, schemas.Unset] = schemas.unset,
        description: typing.Union[MetaOapg.properties.description, None, str, schemas.Unset] = schemas.unset,
        language: typing.Union[MetaOapg.properties.language, None, str, schemas.Unset] = schemas.unset,
        copyright: typing.Union[MetaOapg.properties.copyright, None, str, schemas.Unset] = schemas.unset,
        link: typing.Union[MetaOapg.properties.link, None, str, schemas.Unset] = schemas.unset,
        itunes_author: typing.Union[MetaOapg.properties.itunes_author, None, str, schemas.Unset] = schemas.unset,
        itunes_keywords: typing.Union[MetaOapg.properties.itunes_keywords, None, str, schemas.Unset] = schemas.unset,
        itunes_summary: typing.Union[MetaOapg.properties.itunes_summary, None, str, schemas.Unset] = schemas.unset,
        itunes_subtitle: typing.Union[MetaOapg.properties.itunes_subtitle, None, str, schemas.Unset] = schemas.unset,
        itunes_category: typing.Union[MetaOapg.properties.itunes_category, None, str, schemas.Unset] = schemas.unset,
        itunes_explicit: typing.Union[MetaOapg.properties.itunes_explicit, None, str, schemas.Unset] = schemas.unset,
        owner: typing.Union[MetaOapg.properties.owner, None, decimal.Decimal, int, schemas.Unset] = schemas.unset,
        _configuration: typing.Optional[schemas.Configuration] = None,
        **kwargs: typing.Union[schemas.AnyTypeSchema, dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, None, list, tuple, bytes],
    ) -> 'Podcast':
        return super().__new__(
            cls,
            *_args,
            id=id,
            title=title,
            url=url,
            creator=creator,
            description=description,
            language=language,
            copyright=copyright,
            link=link,
            itunes_author=itunes_author,
            itunes_keywords=itunes_keywords,
            itunes_summary=itunes_summary,
            itunes_subtitle=itunes_subtitle,
            itunes_category=itunes_category,
            itunes_explicit=itunes_explicit,
            owner=owner,
            _configuration=_configuration,
            **kwargs,
        )
